<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Doctor::all();

        
        return view('doctors.index', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // $user_id = Auth::user()->id;

        // $doctorList = Doctor::all();
        // if($user_id == $doctorList->id){
        //     $doctor = $doctorList->id;
        // }

        /* versione 2 */
        // $user_id = Doctor::where('id', $id);

        // $doctor = Doctor::where('id', $user_id);

        // $doctor = [
        //     'name' => 'marco',
        //     'surname' => 'giammarco'
        // ];
        /* end of versione 2 */

        $doctor = Auth::user();
        
        return view('doctors.edit',
        compact('doctor')
        //  ['doctors' => $doctor]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    { 
        $data = $request->all();
        $doctor->update($data);
        return redirect()->route('doctors.show', $doctor->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
