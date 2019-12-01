@extends('layout.layoutmaps') @section('partmaps') partmaps @endsection

<h1 class="text-backdrop">DISTRIK MAYANG</h1>

@section('maps')
<div class="partmaps box-part">
    <img src="{{asset('img/mayang.png')}}" alt="">

    <div class="distrik single-distrik distrik-mayang part-mayang ">
        <ul class="animated bounceIn slow nav nav-tabs" id="myTab" role="tablist" style="border:none">
            <li class="nav-item batang">
                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                <a class=" active" id="batang-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#batang">BATANG</a>
            </li>
            <li class="nav-item silo">
                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                <a class="" id="silo-tab" data-toggle="tab" role="tab" aria-controls="silo" aria-selected="true" href="#silo">SILO</a>
            </li>
            <li class="nav-item mumbulsari">
                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                <a class="" id="mumbulsari-tab" data-toggle="tab" role="tab" aria-controls="mumbulsari" aria-selected="true" href="#mumbulsari">MUMBUL SARI</a>
            </li>
            <li class="nav-item tumperejo">
                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                <a class="" id="tumperejo-tab" data-toggle="tab" role="tab" aria-controls="tumperejo" aria-selected="true" href="#tumperejo">TUMPAREJO</a>
            </li>
        </ul>
    </div>
</div>
@endsection 

@section('konten')
<div class="list-wisata">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="batang" role="tabpanel" aria-labelledby="home-tab">
            <h2 class="judul-lokasi text-right">BATANG-JEMBER</h2>
            @if($datawisatas->count() > 0) @foreach ($datawisatas as $item)
            <div class="row animated zoomIn delay-0.5s">
                <div class="col text-right">
                    <h5>{{$item->namawisata}}</h5>
                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($item->deskripsitagline, $limit = 120, $end = '...') }}</p>
                    <a href="{{ url('/infowisata/'.$item->id_wisata) }}" class="detail">Detail</a>
                </div>
                <div class="col-3 text-center">
                    <img src="{{asset('wisata/'.$item->fotowisata)}}" alt="" class="img--circle mx-auto">
                </div>
            </div>
            @endforeach
             @else

            <div class="vidio">
                <video style="width: 850px;" autoplay loop muted>
                            <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                        </video>
            </div>
            @endif
        </div>

        <div class="tab-pane fade" id="silo" role="tabpanel" aria-labelledby="silo-tab">
            <h2 class="judul-lokasi text-right">SILO-JEMBER</h2>

            @if($datawisatas->count() > 0) 
            @foreach ($datawisatasilo as $itemsilo)
            <div class="row animated zoomIn delay-0.5s">
                <div class="col text-right">
                    <h5>{{$itemsilo->namawisata}}</h5>
                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemsilo->deskripsitagline, $limit = 120, $end = '...') }}</p>
                    <a href="{{ url('/infowisata/'.$itemsilo->id_wisata) }}" class="detail">Detail</a>
                </div>
                <div class="col-3 text-center">
                    <img src="{{asset('wisata/'.$itemsilo->fotowisata)}}" alt="" class="img--circle mx-auto">
                </div>
            </div>
            @endforeach
             @else

            <div class="vidio">
                <video style="width: 850px;" autoplay loop muted>
                            <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                        </video>
            </div>
            @endif
        </div>

        <div class="tab-pane fade" id="mumbulsari" role="tabpanel" aria-labelledby="mumbulsari-tab">
            <h2 class="judul-lokasi text-right">MUMBULSARI-JEMBER</h2>
            @if($datawisatamumbulsari->count() == 0)
            <div class="vidio">
                <video style="width: 850px;" autoplay loop muted>
                            <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                        </video>
            </div>
            @else @foreach ($datawisatamumbulsari as $itemmumbulsari)
            <div class="row animated zoomIn delay-0.5s">
                <div class="col text-right">
                    <h5>{{$itemmumbulsari->namawisata}}</h5>
                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemmumbulsari->deskripsitagline, $limit = 120, $end = '...') }}</p>
                    <a href="{{ url('/infowisata/'.$itemmumbulsari->id_wisata) }}" class="detail">Detail</a>
                </div>
                <div class="col-3 text-center">
                    <img src="{{asset('wisata/'.$itemmumbulsari->fotowisata)}}" alt="" class="img--circle mx-auto">
                </div>
            </div>
            @endforeach @endif
        </div>

        <div class="tab-pane fade" id="tumperejo" role="tabpanel" aria-labelledby="tumperejo-tab">
            <h2 class="judul-lokasi text-right">TUMPEREJO-JEMBER</h2>
            @if($datawisatatumperejo->count() == 0)
            <div class="vidio">
                <video style="width: 850px;" autoplay loop muted>
                            <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                        </video>
            </div>
            @else 
            @foreach ($datawisatatumperejo as $itemtumperejo)
            <div class="row animated zoomIn delay-0.5s">
                <div class="col text-right">
                    <h5>{{$itemtumperejo->namawisata}}</h5>
                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemtumperejo->deskripsitagline, $limit = 120, $end = '...') }}</p>
                    <a href="{{ url('/infowisata/'.$itemtumperejo->id_wisata) }}" class="detail">Detail</a>
                </div>
                <div class="col-3 text-center">
                    <img src="{{asset('wisata/'.$itemtumperejo->fotowisata)}}" alt="" class="img--circle mx-auto">
                </div>
            </div>
            @endforeach 
            @endif
        </div>
    </div>
</div>


@endsection