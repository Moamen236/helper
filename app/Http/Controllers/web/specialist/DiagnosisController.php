<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\QuesCategory;
use App\Models\QuesResult;
use App\Models\Question;
use App\Models\QuesType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DiagnosisController extends Controller
{
    public function index($id)
    {
        $data['patient_id'] = $id;
        // Questions Types
        $data['types'] = QuesType::select('id', 'type')->get();
        // All Categories
        $all_cats = [1 => 'notic_cats', 5 => 'dsm_cats', 6 => 'scale_cats', 7 => 'lovaas_cats'];
        foreach ($all_cats as $key => $cats) {
            $data["$cats"] = QuesCategory::select('id', 'name')
                ->where('ques_type_id', '=', $key)
                ->get();
        }
        // All Questions
        $all_questions = [2 => 'adir', 3 => 'attached_reports', 4 => 'evaluation_history'];
        $diagnosis_questions = [];
        foreach ($all_questions as $key => $questions) {
            $questions =
                [
                    "$questions" => Question::select('id', 'questions')
                        ->where('ques_type_id', '=', $key)
                        ->get()
                ];
            $diagnosis_questions[] = $questions;
        }
        $data['diagnosis_questions'] = $diagnosis_questions;

        // dd($data);

        // Results
        $data['results'] = QuesResult::where('patient_id', '=', $id)->get();

        return view('web.specialist.diagnosis')->with($data);
    }

    public function store_questions(Request $request)
    {
        // dd($request->all());
        foreach ($request->all() as $key => $result) {
            if (strpos($key, 'answer_') !== false) {
                $question_id = str_replace('answer_', '', $key);
                $request->validate([
                    'answer_' . $question_id => 'nullable|in:0,1',
                    'attached_' . $question_id => 'nullable|image'
                ]);
                $img = 'attached_' . $question_id;
                if ($request->hasFile("attached_" . $question_id)) {
                    $path = Storage::disk('uploads')->put('attached', $request->$img);
                    QuesResult::create([
                        'result' => $result,
                        'attached' => $path,
                        'question_id' => $question_id,
                        'patient_id' => $request->patient_id
                    ]);
                } else {
                    QuesResult::create([
                        'result' => $result,
                        'question_id' => $question_id,
                        'patient_id' => $request->patient_id
                    ]);
                }
            }
        }
        $request->session()->flash('success', 'Questions Answered sucessfully');
        return back();
    }
}