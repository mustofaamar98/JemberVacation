@extends('layout.layoutmaps')
@section('partmaps')
    partmapskalisat
@endsection

<h1 class="text-backdrop">DISTRIK KALISAT</h1>
@section('maps')
    <div class="partmaps box-part">
        <img src="{{asset('img/kalisat.png')}}" alt="" class="kalisat">

        <div class="distrik single-distrik distrik-mayang part-kalisat">
                <ul class="animated bounceIn slow nav nav-tabs" id="myTab" role="tablist" style="border:none">
                        <li class="nav-item sukowono">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class=" active" id="sukowono-tab" data-toggle="tab" role="tab" aria-controls="sukowono" aria-selected="true" href="#sukowono">SUKOWONO</a>
                            </li>
                            <li class="nav-item sumberjambe">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class="" id="sumberjambe-tab" data-toggle="tab" role="tab" aria-controls="sumberjambe" aria-selected="true" href="#sumberjambe">SUMBERJAMBE</a>
                            </li>
                            <li class="nav-item kalisat">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class="" id="kalisat-tab" data-toggle="tab" role="tab" aria-controls="kalisat" aria-selected="true" href="#kalisat">KALISAT</a>
                            </li>
                            <li class="nav-item ledokombo">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class="" id="ledokombo-tab" data-toggle="tab" role="tab" aria-controls="ledokombo" aria-selected="true" href="#ledokombo">LEDOKOMBO</a>
                            </li>
                </ul>
            </div>
    </div>
@endsection


@section('konten')
<div class="list-wisata">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="sukowono" role="tabpanel" aria-labelledby="sukowono-tab">
            <h2 class="judul-lokasi text-right">SUKOWONO-JEMBER</h2>
            @foreach ($datawisatasukowono as $itemsukowono)
            <div class="row animated zoomIn delay-0.5s">
                        <div class="col text-right">
                                    <h5>{{$itemsukowono->namawisata}}</h5> 
                                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemsukowono->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                    <a href="{{ url('/infowisata/'.$itemsukowono->id_wisata) }}" class="detail">Detail</a>
                                </div>
                        <div class="col-3 text-center">
                        <img src="{{asset('wisata/'.$itemsukowono->fotowisata)}}" alt="" class="img--circle mx-auto">
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="tab-pane fade" id="sumberjambe" role="tabpanel" aria-labelledby="sumberjambe-tab">
                <h2 class="judul-lokasi text-right">SUMBERJAMBE-JEMBER</h2>
                @if($datawisatasumberjambe->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisatasumberjambe as $itemsumberjambe)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemsumberjambe->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemsumberjambe->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itemsumberjambe->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemsumberjambe->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>

        <div class="tab-pane fade" id="kalisat" role="tabpanel" aria-labelledby="kalisat-tab">
                <h2 class="judul-lokasi text-right">KALISAT-JEMBER</h2>
                @if($datawisatakalisat->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisatakalisat as $itemkalisat)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemkalisat->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemkalisat->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itemkalisat->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemkalisat->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>

        <div class="tab-pane fade" id="ledokombo" role="tabpanel" aria-labelledby="ledokombo-tab">
                <h2 class="judul-lokasi text-right">LEDOKOMBO-JEMBER</h2>
                @if($datawisataledokombo->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisataledokombo as $itemledokombo)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemledokombo->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{$itemledokombo->deskripsitagline}}</p>
                                        <a href="{{ url('/infowisata/'.$itemledokombo->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemledokombo->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>
    </div> 
</div>

  
@endsection