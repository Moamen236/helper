<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\QuesCategory;
use App\Models\Question;
use App\Models\QuesType;
use Illuminate\Http\Request;

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
                    "$questions" => Question::select('id', 'question')
                        ->where('ques_type_id', '=', $key)
                        ->get()
                ];
            $diagnosis_questions[] = $questions;
        }
        $data['diagnosis_questions'] = $diagnosis_questions;

        // dd($diagnosis_questions[0]);
        return view('web.specialist.diagnosis')->with($data);
    }
}