<?php

namespace App\Http\Controllers\Api;

use App\Doctor;
use App\Http\Controllers\Controller;
use App\Specialization;
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
         $doctors = Doctor::paginate(4);

        
        return response()->json($doctors);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $doctor = Doctor::where("id", $id);
        $doctor = Doctor::findOrFail($id);

        $doctor->load("Specialization","Review");

        return response()->json($doctor);
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
    public function destroy($id)
    {
        //
    }

    public function search()
    {
        $search_specialization = $_GET['specialization'];
        $search_city = $_GET['city'];


        $doctors = Specialization::join('doctor_specialization', 'doctor_specialization.specialization_id', '=', 'specializations.id')
                                ->join('doctors', 'doctor_specialization.doctor_id', '=', 'doctors.id')
                                ->join('reviews', 'doctors.id', '=', 'reviews.doctor_id')
                                ->where('specializations.specialization','LIKE','%'.$search_specialization.'%')
                                ->where('doctors.city','LIKE','%'.$search_city.'%')
                                ->get();

        return response()->json($doctors);

        // http://       /api/search?city=&specialization=
    }

    public function advanceSearch()
    {
        $search_specialization = $_GET['specialization'];
        $search_city = $_GET['city'];
        $search_medical = $_GET['medicalService'];
        $search_name = $_GET['name'];
        $search_surname = $_GET['surname'];


        $doctors = Specialization::join('doctor_specialization', 'doctor_specialization.specialization_id', '=', 'specializations.id')
                                ->join('doctors', 'doctor_specialization.doctor_id', '=', 'doctors.id')
                                ->where('specializations.specialization','LIKE','%'.$search_specialization.'%')
                                ->where('doctors.city','LIKE','%'.$search_city.'%')
                                ->where('doctors.medicalService','LIKE','%'.$search_medical.'%')
                                ->where('doctors.name','LIKE','%'.$search_name.'%')
                                ->where('doctors.surname','LIKE','%'.$search_surname.'%')
                                ->get();

        return response()->json($doctors);

        // http://        /api/advanceSearch?city=&specialization=&medicalService=&name=&surname=
    }

}
