<?php

namespace App\Http\Controllers;

use App\datahotel;
use App\datakuliner;
use App\datawisata;
use App\datadaerah;
use App\datadistrict;
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

    // public function layoutmaps(){
    //     $cekwisata=datawisata::all();

    //     return view('layoutmaps', compact('cekwisata'));
    // }

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

    public function distrik($distrik)
    {
        $data = datadaerah::where('id_district' , $distrik)->get();
        return response()->json($data);
    }

    public function daerah($daerah)
    {
        $data = datawisata::where('daerah' , $daerah)->get();
        return response()->json($data);
    }

    public function hitungJarak($lokasi1_lat, $lokasi1_long, $lokasi2_lat, $lokasi2_long, $unit = 'km', $desimal = 2) {
        // Menghitung jarak dalam derajat
        $derajat = 6371*acos((cos(deg2rad($lokasi2_lat))*cos(deg2rad($lokasi1_lat))*cos(deg2rad($lokasi1_long)- deg2rad($lokasi2_long))) + (sin(deg2rad($lokasi2_lat)) * sin(deg2rad($lokasi1_lat))));
         
        // Mengkonversi derajat kedalam unit yang dipilih (kilometer, mil atau mil laut)
        switch($unit) {
         case 'km':
          $jarak = $derajat * 1; // 1 derajat = 111.13384 km, berdasarkan diameter rata-rata bumi (12,735 km)
          break;
         case 'mi':
          $jarak = $derajat * 69.05482; // 1 derajat = 69.05482 miles(mil), berdasarkan diameter rata-rata bumi (7,913.1 miles)
          break;
         case 'nmi':
          $jarak =  $derajat * 59.97662; // 1 derajat = 59.97662 nautic miles(mil laut), berdasarkan diameter rata-rata bumi (6,876.3 nautical miles)
        }
        return round($jarak, $desimal);
    }

    public function rekomendasi($rekomendasi)
    {
        $wisata = explode(",",$rekomendasi);
        $rekomendasi = array();
        $hotel = array();
        foreach ($wisata as $data) {
            $x = datawisata::where('id_wisata',$data)->get();
            $y = datahotel::where('id_wisata',$data)->get();
            array_push($rekomendasi , $x);
            array_push($hotel , $y);
        }
        $jarak = array();
        $x=0;
            for ($i=0; $i < count($hotel); $i++) { 
                $hotel[$i][0]['lat']=0;
                for($y = 0; $y < count($rekomendasi); $y++) {
                    $x = $this->hitungJarak($rekomendasi[$y][0]['lat'],$rekomendasi[$y][0]['lng'],$hotel[$i][0]['lat'],$hotel[$i][0]['lng'])/count($rekomendasi);
                    $hotel[$i][0]['lat'] += $x ;
                }    
            }

             for ($z=0; $z < count($hotel)-1 ; $z++) { 
                          
                if( $hotel[$z][0]['lat']>$hotel[$z+1][0]['lat']) //swap zf the current value zs greater the next value. change > to > for descendzng order
                {
                        $temp=$hotel[$z][0];
                        $hotel[$z][0]=$hotel[$z+1][0];
                        $hotel[$z+1][0]=$temp;
                        $swapped=true;
                }
             }
        return response()->json($hotel);
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
