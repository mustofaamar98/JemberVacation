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
        $datawisatas=datawisata::where('daerah','22')->get();
        $datawisatasilo=datawisata::where('daerah','7')->get();
        $datawisatamumbulsari=datawisata::where('daerah','8')->get();
        $datawisatatumperejo=datawisata::where('daerah','6')->get();

        return view('partmaps', compact('datawisatas','datawisatasilo','datawisatamumbulsari','datawisatatumperejo'));
        
    }
    public function partkalisat(){
        $datawisatakalisat=datawisata::where('daerah','18')->get();
        $datawisatasukowono=datawisata::where('daerah','21')->get();
        $datawisatasumberjambe=datawisata::where('daerah','20')->get();
        $datawisataledokombo=datawisata::where('daerah','19')->get();

        return view('partkalisat', compact('datawisatakalisat','datawisatasukowono','datawisatasumberjambe','datawisataledokombo'));
    }

    public function partwuluhan(){
        $datawisatabalung=datawisata::where('daerah','11')->get();
        $datawisatawuluhan=datawisata::where('daerah','4')->get();
        $datawisataambulu=datawisata::where('daerah','5')->get();

        return view('partwuluhan', compact('datawisatabalung','datawisatawuluhan','datawisataambulu'));
    }

    public function partjember(){
        $arjasa=datawisata::where('daerah','17')->get();
        $datawisatawirolegi=datawisata::where('daerah','23')->get();
        $datawisatajember=datawisata::where('daerah','24')->get();

        return view('partjember', compact('arjasa','datawisatawirolegi','datawisatajember'));
    }

    public function partrambipuji(){
        $datawisatapanti=datawisata::where('daerah','16')->get();
        $datawisatarambipuji=datawisata::where('daerah','20')->get();
        $datawisatamangli=datawisata::where('daerah','25')->get();
        $datawisatajenggawah=datawisata::where('daerah','9')->get();

        return view('partrambipuji', compact('datawisatapanti','datawisatarambipuji','datawisatamangli','datawisatajenggawah'));
    }

    public function partpuger(){
        $datawisataumbulsari=datawisata::where('daerah','12')->get();
        $datawisatakencong=datawisata::where('daerah','1')->get();
        $datawisatapuger=datawisata::where('daerah','3')->get();
        $datawisatagumukmas=datawisata::where('daerah','2')->get();

        return view('partpuger', compact('datawisataumbulsari','datawisatakencong','datawisatapuger','datawisatagumukmas'));
    }

    public function parttanggul(){
        $datawisatasumberbaru=datawisata::where('daerah','13')->get();
        $datawisatabangsalsari=datawisata::where('daerah','15')->get();
        $datawisatatanggul=datawisata::where('daerah','14')->get();

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
