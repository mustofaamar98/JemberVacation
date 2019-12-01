@extends('layout.layoutmaps')
@section('partmaps')
    partmapspuger
@endsection

<h1 class="text-backdrop">DISTRIK PUGER</h1>
@section('maps')
    <div class="partmaps box-part">
        <img src="{{asset('img/puger.png')}}" alt="" class="puger">

        <div class="distrik single-distrik distrik-mayang part-puger">
            <ul class="animated bounceIn slow nav nav-tabs" id="myTab" role="tablist" style="border:none">
                <li class="nav-item umbulsari">
                        <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                        <a class=" active" id="umbulsari-tab" data-toggle="tab" role="tab" aria-controls="umbulsari" aria-selected="true" href="#umbulsari">UMBULSARI</a>
                    </li>
                    <li class="nav-item kencong">
                        <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                        <a class="" id="kencong-tab" data-toggle="tab" role="tab" aria-controls="kencong" aria-selected="true" href="#kencong">KENCONG</a>
                    </li>
                    <li class="nav-item puger">
                        <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                        <a class="" id="puger-tab" data-toggle="tab" role="tab" aria-controls="puger" aria-selected="true" href="#puger">PUGER</a>
                    </li>
                    <li class="nav-item gumukmas">
                        <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                        <a class="" id="gumukmas-tab" data-toggle="tab" role="tab" aria-controls="gumukmas" aria-selected="true" href="#gumukmas">GUMUK MAS</a>
                    </li>
                    
        </ul>
            </div>
    </div>
@endsection


@section('konten')
<div class="list-wisata">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="umbulsari" role="tabpanel" aria-labelledby="umbulsari-tab">
            <h2 class="judul-lokasi text-right">UMBULSARI-JEMBER</h2>
            @if($datawisataumbulsari->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
            @foreach ( $datawisataumbulsari as $itemumbulsari)
            <div class="row animated zoomIn delay-0.5s">
                        <div class="col text-right">
                                    <h5>{{$itemumbulsari->namawisata}}</h5> 
                                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemumbulsari->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                    <a href="{{ url('/infowisata/'.$itemumbulsari->id_wisata) }}" class="detail">Detail</a>
                                </div>
                        <div class="col-3 text-center">
                        <img src="{{asset('wisata/'.$itemumbulsari->fotowisata)}}" alt="" class="img--circle mx-auto">
                        </div>
                    </div>
            @endforeach
            @endif
        </div>

        <div class="tab-pane fade" id="kencong" role="tabpanel" aria-labelledby="kencong-tab">
                <h2 class="judul-lokasi text-right">KENCONG-JEMBER</h2>
                @if($datawisatakencong->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisatakencong as $itemkencong)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemkencong->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemkencong->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itemkencong->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemkencong->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>

        <div class="tab-pane fade" id="puger" role="tabpanel" aria-labelledby="puger-tab">
                <h2 class="judul-lokasi text-right">PUGER-JEMBER</h2>
                @if($datawisatapuger->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisatapuger as $itempuger)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itempuger->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itempuger->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itempuger->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itempuger->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>

        <div class="tab-pane fade" id="gumukmas" role="tabpanel" aria-labelledby="gumukmas-tab">
                <h2 class="judul-lokasi text-right">GUMUKMAS-JEMBER</h2>
                @if($datawisatagumukmas->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisatagumukmas as $itemgumukmas)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemgumukmas->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemgumukmas->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itemgumukmas->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemgumukmas->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>
    </div> 
</div>

  
@endsection