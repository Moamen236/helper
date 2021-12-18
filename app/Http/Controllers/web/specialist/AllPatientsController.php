<?php

namespace App\Http\Controllers\web\specialist;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AllPatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['patients'] = Patient::where('specialist_id', Auth::id())->paginate(10);
        return view('web.specialist.patients')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'nullable|string',
            'no_of_bros' => 'nullable|numeric',
            'arr_btw_bros' => 'nullable|numeric',
            'cg_name' => 'required|string|max:255',
            'cg_relation' => 'nullable|string|max:255',
            'cg_phone' => 'nullable|numeric',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'specialist_id' => 'required|numeric|exists:users,id',
        ]);

        $picture = $request->file('picture');
        $path = Storage::disk('uploads')->put('patients', $picture);
        $data['picture'] = $path;

        $patient = Patient::create($data);
        $message = 'Patient added successfully';

        return redirect()->route('patients.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        dd($patient);
        $patient->delete();
        $message = 'Patient deleted successfully';
        return redirect()->route('patients.index')->with('success', $message);
    }
}