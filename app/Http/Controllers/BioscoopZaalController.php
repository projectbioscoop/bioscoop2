<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioscoopZaalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $display = \App\tbl_displays::find($id);
        $theather = \App\tbl_theather::where("theather_id",$display["theather_id"])->get();
        $rows = \App\tbl_z_rules::where("theather_id",$display["theather_id"])->get();
        $chairs = \App\tbl_chairs::where("display_id",$id)->get();

        $movieData = [
            "theatherName" => $theather[0]["name"],
            "capacity" => $theather[0]["capacity"],
            "rowsLoversSeats" => $rows,
            "amountOfChairsPerRow" => $theather[0]["amount_of_chairs_row"],
            "amountOfLoverChairs" =>  $theather[0]["amount_of_loverchairs"],
            "chairs" => [
                $chairs
            ]
        ];

        return view('Select_chair.ChairSelect', compact("movieData"));
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
    public function destroy($id)
    {
        //
    }
}
