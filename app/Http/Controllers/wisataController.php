<?php

namespace App\Http\Controllers;

use App\datahotel;
use App\datakuliner;
use App\datawisata;
use Illuminate\Http\Request;

class wisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('maps');
    }

    public function partmaps()
    {
        $datawisatas=datawisata::where('daerah','batang')->get();
        $datawisatasilo=datawisata::where('daerah','silo')->get();
        $datawisatamumbulsari=datawisata::where('daerah','mumbulsari')->get();
        $datawisatatumperejo=datawisata::where('daerah','tumperejo')->get();

        return view('partmaps', compact('datawisatas','datawisatasilo','datawisatamumbulsari','datawisatatumperejo'));
        
    }
    public function partkalisat(){
        $datawisatakalisat=datawisata::where('daerah','kalisat')->get();
        $datawisatasukowono=datawisata::where('daerah','sukowono')->get();
        $datawisatasumberjambe=datawisata::where('daerah','sumberjambe')->get();
        $datawisataledokombo=datawisata::where('daerah','ledokombo')->get();

        return view('partkalisat', compact('datawisatakalisat','datawisatasukowono','datawisatasumberjambe','datawisataledokombo'));
    }

    public function partwuluhan(){
        $datawisatabalung=datawisata::where('daerah','balung')->get();
        $datawisatawuluhan=datawisata::where('daerah','wuluhan')->get();
        $datawisataambulu=datawisata::where('daerah','ambulu')->get();

        return view('partwuluhan', compact('datawisatabalung','datawisatawuluhan','datawisataambulu'));
    }

    public function partjember(){
        $arjasa=datawisata::where('daerah','arjasa')->get();
        $datawisatawirolegi=datawisata::where('daerah','wirolegi')->get();
        $datawisatajember=datawisata::where('daerah','jember')->get();

        return view('partjember', compact('arjasa','datawisatawirolegi','datawisatajember'));
    }

    public function partrambipuji(){
        $datawisatapanti=datawisata::where('daerah','panti')->get();
        $datawisatarambipuji=datawisata::where('daerah','rambipuji')->get();
        $datawisatamangli=datawisata::where('daerah','mangli')->get();
        $datawisatajenggawah=datawisata::where('daerah','jenggawah')->get();

        return view('partrambipuji', compact('datawisatapanti','datawisatarambipuji','datawisatamangli','datawisatajenggawah'));
    }

    public function partpuger(){
        $datawisataumbulsari=datawisata::where('daerah','umbulsari')->get();
        $datawisatakencong=datawisata::where('daerah','kencong')->get();
        $datawisatapuger=datawisata::where('daerah','puger')->get();
        $datawisatagumukmas=datawisata::where('daerah','gumukmas')->get();

        return view('partpuger', compact('datawisataumbulsari','datawisatakencong','datawisatapuger','datawisatagumukmas'));
    }

    public function parttanggul(){
        $datawisatasumberbaru=datawisata::where('daerah','sumberbaru')->get();
        $datawisatabangsalsari=datawisata::where('daerah','bangsalsari')->get();
        $datawisatatanggul=datawisata::where('daerah','tanggul')->get();

        return view('parttanggul', compact('datawisatasumberbaru','datawisatabangsalsari','datawisatatanggul'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('infowisata');
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

    public function showData($id){
        $show = datawisata::where('id_wisata',$id)->first();
        $hotel = datahotel::where('id_wisata',$id)->get();
        $kuliner = datakuliner::where('daerah',$show->daerah)->get();

        return view('infowisata',compact('show','hotel','kuliner'));
    }
}
