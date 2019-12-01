<?php

namespace App\Http\Controllers;

use Str;
use Illuminate\Http\Request;
use App\datawisata;
use App\datahotel;
use App\datakuliner;
use App\userAdmin;
use App\datadaerah;
use App\datadistrict;
use File;
use Illuminate\Support\Facades\Storage;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = datawisata::join('districts','districts.id_daerah','datawisata.daerah')->join('district', 'district.id_district','districts.id_district')->get();
        $hotel = datahotel::join('districts','districts.id_daerah','datahotel.daerah')->join('district', 'district.id_district','districts.id_district')->get();
        $kuliner = datakuliner::join('districts','districts.id_daerah','datakuliner.daerah')->join('district', 'district.id_district','districts.id_district')->get();
        $user = userAdmin::all();
        return view('layout.layoutdasboard', compact('wisata','user', 'hotel', 'kuliner'));
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
        $request->validate([
            'fotowisata' => 'image|mimes:jpeg,png,gif,webp'
        ]);


        $image = $request->file('fotowisata');
        $filename = time() . '-' . $image->getClientOriginalName();
        $tempat = public_path('wisata');
        $temp = $image->move($tempat, $filename);

        $a = datawisata::create([
            'daerah' => $request->daerah,
            'namawisata' => $request->namawisata,
            'judultagline' => $request->judultagline,
            'deskripsitagline' => $request->deskripsitagline,
            'judul1' => $request->judul1,
            'fotowisata' => $filename,
            'deskripsijudul1' => $request->deskripsijudul1,
            'judul2' => $request->judul2,
            'deskripsijudul2' => $request->deskripsijudul2,
            'urlmap' => $request->urlmap,
            'urlvidio' => $request->urlvidio,
            'lat' => $request->lat,
            'lng' => $request->lng
        ]);

        return redirect('layoutdasboard');
    }

    public function storehotel(Request $request)
    {

        $request->validate([
            'fotohotel' => 'image|mimes:jpeg,png,gif,webp',
            'harga' => 'required|numeric|min:0'
        ]);

        $image = $request->file('fotohotel');
        $filename = time() . '-' . $image->getClientOriginalName();
        $tempat = public_path('hotel');
        $temp = $image->move($tempat, $filename);

        $b = datahotel::create([
            'daerah' => $request->daerah,
            'namahotel' => $request->namahotel,
            'alamathotel' => $request->alamathotel,
            'deskripsihotel' => $request->deskripsihotel,
            'fotohotel' => $filename,
            'harga' => $request->harga,
            'id_wisata' => $request->wisata,
            'lat' => $request->lat,
            'lng' => $request->lng

        ]);

        return redirect('layoutdasboard');
    }

    public function storekuliner(Request $request)
    {

        $request->validate([
            'fotokuliner' => 'image|mimes:jpeg,png,gif,webp|max:10000',
            'hargakuliner' => 'required|numeric|min:0'
        ]);

        $image = $request->fotokuliner;
        $filename = time() . '-' . $image->getClientOriginalName();
        $tempat = public_path('kuliner');
        $temp = $image->move($tempat, $filename);

        $c = datakuliner::create([
            'daerah' => $request->daerah,
            'namakuliner' => $request->namakuliner,
            'deskripsikuliner' => $request->deskripsikuliner,
            'hargakuliner' => $request->hargakuliner,
            'fotokuliner' => $filename

        ]);

        return redirect('layoutdasboard');
    }




    public function showdata($id)
    {
        $show = datawisata::where('id_wisata', $id)->first();
        return response()->json($show);
    }
    public function showdatahotel($id)
    {
        $show = datahotel::where('id_hotel', $id)->first();
        return response()->json($show);
    }
    public function showdatakuliner($id)
    {
        $show = datakuliner::where('id_kuliner', $id)->first();
        return response()->json($show);
    }
    public function showdataprofil($id)
    {
        $show = userAdmin::where('id', $id)->first();
        return response()->json($show);
    }





    public function showdataform($id, Request $request)
    {

        $request->validate([
            'fotowisata' => 'image|mimes:jpeg,png,gif,webp'
        ]);

        $datawisataupdate = datawisata::where('id_wisata', $id)->first();
        $filename = $datawisataupdate->fotowisata;
        if (!is_null($request->fotowisata)) {
            unlink(public_path('wisata') . '/' . $filename);

            $image = $request->file('fotowisata');
            $filename = time() . '-' . $image->getClientOriginalName();
            $tempat = public_path('wisata');
            $temp = $image->move($tempat, $filename);
        }

        $datawisataupdate->update([
            'daerah' => $request->daerah,
            'namawisata' => $request->namawisata,
            'judultagline' => $request->judultagline,
            'deskripsitagline' => $request->deskripsitagline,
            'judul1' => $request->judul1,
            'deskripsijudul1' => $request->deskripsijudul1,
            'judul2' => $request->judul2,
            'deskripsijudul2' => $request->deskripsijudul2,
            'urlmap' => $request->urlmap,
            'urlvidio' => $request->urlvidio,
            'fotowisata' => $filename,
            'lat' => $request->lat,
            'lng' => $request->lng
        ]);

        return redirect('layoutdasboard');
    }


    public function showdataformhotel($id, Request $request)
    {

        $request->validate([
            'fotohotel' => 'image|mimes:jpeg,png,gif,webp',
            'harga' => 'required|numeric|min:0'
        ]);

        $datahotelupdate = datahotel::where('id_hotel', $id)->first();
        $filename = $datahotelupdate->fotohotel;
        if (!is_null($request->fotohotel)) {
            unlink(public_path('hotel') . '/' . $datahotelupdate->fotohotel);

            $image = $request->file('fotohotel');
            $filename = time() . '-' . $image->getClientOriginalName();
            $tempat = public_path('hotel');
            $temp = $image->move($tempat, $filename);
        }

        $datahotelupdate->update([
            'daerah' => $request->daerah,
            'namahotel' => $request->namahotel,
            'alamathotel' => $request->alamathotel,
            'deskripsihotel' => $request->deskripsihotel,
            'fotohotel' => $filename,
            'harga' => $request->harga,
            'id_wisata' => $request->wisata,
            'lat' => $request->lat,
            'lng' => $request->lng
        ]);

        return redirect('layoutdasboard');
    }

    public function showdataformkuliner($id, Request $request)
    {

        $request->validate([
            'fotokuliner' => 'image|mimes:jpeg,png,gif,webp',
            'hargakuliner' => 'required|numeric|min:0'
        ]);

        $datakulinerupdate = datakuliner::where('id_kuliner', $id)->first();
        $filename = $datakulinerupdate->fotokuliner;
        if (!is_null($request->fotokuliner)) {
            unlink(public_path('kuliner') . '/' . $datakulinerupdate->fotokuliner);

            $image = $request->file('fotokuliner');
            $filename = time() . '-' . $image->getClientOriginalName();
            $tempat = public_path('kuliner');
            $temp = $image->move($tempat, $filename);
        }

        $datakulinerupdate->update([
            'daerah' => $request->daerah,
            'namakuliner' => $request->namakuliner,
            'deskripsikuliner' => $request->deskripsikuliner,
            'hargakuliner' => $request->hargakuliner,
            'fotokuliner' => $filename
        ]);

        return redirect('layoutdasboard');
    }
    public function showdataformprofil($id, Request $request)
    {

        $request->validate([
            'fotoprofil' => 'image|mimes:jpeg,png,gif,webp',
        ]);

        $dataprofilupdate = userAdmin::where('id', $id)->first();
        $filename = $dataprofilupdate->fotokuliner;
        if (!is_null($request->fotoprofil)) {
            unlink(public_path('profil') . '/' . $dataprofilupdate->fotoprofil);

            $image = $request->file('fotoprofil');
            $filename = time() . '-' . $image->getClientOriginalName();
            $tempat = public_path('profil');
            $temp = $image->move($tempat, $filename);
        }

        $dataprofilupdate->update([
            'name' => $request->name,
            'email' => $request->email,
            'fotoprofil' => $filename
        ]);

        return redirect('layoutdasboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dashController  $dashController
     * @return \Illuminate\Http\Response
     */
    public function show(dashController $dashController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dashController  $dashController
     * @return \Illuminate\Http\Response
     */
    public function edit(dashController $dashController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dashController  $dashController
     * @return \Illuminate\Http\Response
     */
    public function updates(Request $request, $dashController)
    {
        $data = userAdmin::find($dashController);
        $filename = $data->fotoprofil;
        if (!is_null($request->fotoprofil)) {
            unlink(public_path('profil') . '/' . $filename);

            $image = $request->file('fotoprofil');
            $filename = time() . '-' . $image->getClientOriginalName();
            $tempat = public_path('profil');
            $temp = $image->move($tempat, $filename);
        }
        $data->name = $request['name'];
        $data->email = $request['email'];
        $data->fotoprofil = $filename;
        $data->save();
        $wisata = datawisata::all();
        $hotel = datahotel::all();
        $kuliner = datakuliner::all();
        $user = userAdmin::all();
        return view('layout.layoutdasboard', compact('wisata','user', 'hotel', 'kuliner'));
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dashController  $dashController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datawisatadelete = datawisata::where('id_wisata', $id)->first();
        if(File::exists('wisata/'.$datawisatadelete->fotowisata)){
            File::delete('wisata/'.$datawisatadelete->fotowisata);
        }
        $datawisatadelete->delete();

        return redirect('layoutdasboard');
    }

    public function destroyhotel($id)
    {
        $datahoteldelete = datahotel::where('id_hotel', $id)->first();
            if(File::exists('hotel/'.$datahoteldelete->fotohotel)) {
               File::delete('hotel/'.$datahoteldelete->fotohotel);
           }
           $datahoteldelete->delete();

        return redirect('layoutdasboard');
    }

    public function destroykuliner($id)
    {
        $datakulinerdelete = datakuliner::where('id_kuliner', $id)->first();
        if(File::exists('kuliner/'.$datakulinerdelete->fotokuliner)){
            File::delete('kuliner/'.$datakulinerdelete->fotokuliner);
        }
        $datakulinerdelete->delete();

        return redirect('layoutdasboard');
    }
}
