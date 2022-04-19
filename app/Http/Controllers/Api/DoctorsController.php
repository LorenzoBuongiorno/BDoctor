<?php

namespace App\Http\Controllers\Api;

use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsController extends Controller
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
        $search_specialization = $_GET['specialization_id'];
        $search_city = $_GET['city'];

        
        $doctors = Doctor::where('city','LIKE','%'.$search_city. '%')->where('specialization_id','LIKE','%'.$search_specialization. '%')->get();

        return response()->json($doctors);
        
        // http://       /api/search?city=&name=
    }
}
