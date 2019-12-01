@extends('layout.layoutmaps') @section('partmaps') partmapsrambipuji @endsection

<h1 class="text-backdrop">DISTRIK RAMBIPUJI</h1>
@section('maps')
<div class="partmaps box-part">
    <img src="{{asset('img/rambipuji.png')}}" alt="" class="rambi">

    <div class="distrik single-distrik distrik-mayang part-rambipuji">
        <ul class="animated bounceIn slow nav nav-tabs" id="myTab" role="tablist" style="border:none">
            <li class="nav-item panti">
                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                <a class=" active" id="panti-tab" data-toggle="tab" role="tab" aria-controls="panti" aria-selected="true" href="#panti">PANTI</a>
            </li>
            <li class="nav-item rambipuji">
                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                <a class="" id="rambipuji-tab" data-toggle="tab" role="tab" aria-controls="rambipuji" aria-selected="true" href="#rambipuji">RAMBIPUJI</a>
            </li>
            <li class="nav-item mangli">
                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                <a class="" id="mangli-tab" data-toggle="tab" role="tab" aria-controls="mangli" aria-selected="true" href="#mangli">MANGLI</a>
            </li>
            <li class="nav-item jenggawah">
                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                <a class="" id="jenggawah-tab" data-toggle="tab" role="tab" aria-controls="jenggawah" aria-selected="true" href="#jenggawah">JENGGAWAH</a>
            </li>

        </ul>
    </div>
</div>
@endsection @section('konten')
<div class="list-wisata">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="panti" role="tabpanel" aria-labelledby="panti-tab">
            <h2 class="judul-lokasi text-right">PANTI-JEMBER</h2>
            @if($datawisatapanti->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
            @foreach ($datawisatapanti as $itempanti)
            <div class="row animated zoomIn delay-0.5s">
                <div class="col text-right">
                    <h5>{{$itempanti->namawisata}}</h5>
                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itempanti->deskripsitagline, $limit = 120, $end = '...') }}</p>
                    <a href="{{ url('/infowisata/'.$itempanti->id_wisata) }}" class="detail">Detail</a>
                </div>
                <div class="col-3 text-center">
                    <img src="{{asset('wisata/'.$itempanti->fotowisata)}}" alt="" class="img--circle mx-auto">
                </div>
            </div>
            @endforeach 
            @endif
        </div>

        <div class="tab-pane fade" id="rambipuji" role="tabpanel" aria-labelledby="rambipuji-tab">
            <h2 class="judul-lokasi text-right">RAMBIPUJI-JEMBER</h2>
            @if($datawisatarambipuji->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
            @foreach ($datawisatarambipuji as $itemrambipuji)
            <div class="row animated zoomIn delay-0.5s">
                <div class="col text-right">
                    <h5>{{$itemrambipuji->namawisata}}</h5>
                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemrambipuji->deskripsitagline, $limit = 120, $end = '...') }}</p>
                    <a href="{{ url('/infowisata/'.$itemrambipuji->id_wisata) }}" class="detail">Detail</a>
                </div>
                <div class="col-3 text-center">
                    <img src="{{asset('wisata/'.$itemrambipuji->fotowisata)}}" alt="" class="img--circle mx-auto">
                </div>
            </div>
            @endforeach 
            @endif
        </div>

        <div class="tab-pane fade" id="mangli" role="tabpanel" aria-labelledby="mangli-tab">
            <h2 class="judul-lokasi text-right">MANGLI-JEMBER</h2>
            @if($datawisatamangli->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
            @foreach ($datawisatamangli as $itemmangli)
            <div class="row animated zoomIn delay-0.5s">
                <div class="col text-right">
                    <h5>{{$itemmangli->namawisata}}</h5>
                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemmangli->deskripsitagline, $limit = 120, $end = '...') }}</p>
                    <a href="{{ url('/infowisata/'.$itemmangli->id_wisata) }}" class="detail">Detail</a>
                </div>
                <div class="col-3 text-center">
                    <img src="{{asset('wisata/'.$itemmangli->fotowisata)}}" alt="" class="img--circle mx-auto">
                </div>
            </div>
            @endforeach 
            @endif
        </div>

        <div class="tab-pane fade" id="jenggawah" role="tabpanel" aria-labelledby="jenggawah-tab">
            <h2 class="judul-lokasi text-right">JENGGAWAH-JEMBER</h2>
            @if($datawisatajenggawah->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
            @foreach ($datawisatajenggawah as $itemjenggawah)
            <div class="row animated zoomIn delay-0.5s">
                <div class="col text-right">
                    <h5>{{$itemjenggawah->namawisata}}</h5>
                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemjenggawah->deskripsitagline, $limit = 120, $end = '...') }}</p>
                    <a href="{{ url('/infowisata/'.$itemjenggawah->id_wisata) }}" class="detail">Detail</a>
                </div>
                <div class="col-3 text-center">
                    <img src="{{asset('wisata/'.$itemjenggawah->fotowisata)}}" alt="" class="img--circle mx-auto">
                </div>
            </div>
            @endforeach 
            @endif
        </div>
    </div>
</div>


@endsection