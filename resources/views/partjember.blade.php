@extends('layout.layoutmaps')
@section('partmaps')
    partmapskalisat
@endsection

<h1 class="text-backdrop">DISTRIK JEMBER</h1>
@section('maps')
    <div class="partmaps box-part">
        <img src="{{asset('img/jember.png')}}" alt="" class="jember">

        <div class="distrik single-distrik distrik-mayang part-jember">
                <ul class="animated bounceIn slow nav nav-tabs" id="myTab" role="tablist" style="border:none">
                        <li class="nav-item arjasa">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class=" active" id="arjasa-tab" data-toggle="tab" role="tab" aria-controls="arjasa" aria-selected="true" href="#arjasa">ARJASA</a>
                            </li>
                            <li class="nav-item wirolegi">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class="" id="wirolegi-tab" data-toggle="tab" role="tab" aria-controls="wirolegi" aria-selected="true" href="#wirolegi">WIROLEGI</a>
                            </li>
                            <li class="nav-item jember">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class="" id="jember-tab" data-toggle="tab" role="tab" aria-controls="jember" aria-selected="true" href="#jember">JEMBER</a>
                            </li>
                            
                </ul>
            </div>
    </div>
@endsection


@section('konten')
<div class="list-wisata">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="arjasa" role="tabpanel" aria-labelledby="arjasa-tab">
            <h2 class="judul-lokasi text-right">ARJASA-JEMBER</h2>
            @if($arjasa->count() == 0)
            <div class="vidio">
                <video style="width: 850px;" autoplay loop muted>
                            <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                        </video>
            </div>
            @else 
            @foreach ($arjasa as $itemarjasa)
            <div class="row animated zoomIn delay-0.5s">
                        <div class="col text-right">
                                    <h5>{{$itemarjasa->namawisata}}</h5> 
                                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemarjasa->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                    <a href="{{ url('/infowisata/'.$itemarjasa->id_wisata) }}" class="detail">Detail</a>
                                </div>
                        <div class="col-3 text-center">
                        <img src="{{asset('wisata/'.$itemarjasa->fotowisata)}}" alt="" class="img--circle mx-auto">
                        </div>
                    </div>
            @endforeach
            @endif
        </div>

        <div class="tab-pane fade" id="wirolegi" role="tabpanel" aria-labelledby="wirolegi-tab">
                <h2 class="judul-lokasi text-right">WIROLEGI-JEMBER</h2>
                @if($datawisatawirolegi->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisatawirolegi as $itemwirolegi)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemwirolegi->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemwirolegi->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itemwirolegi->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemwirolegi->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>

        <div class="tab-pane fade" id="jember" role="tabpanel" aria-labelledby="jember-tab">
                <h2 class="judul-lokasi text-right">JEMBER-JEMBER</h2>
                @if($datawisatajember->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisatajember as $itemjember)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemjember->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemjember->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itemjember->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemjember->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>
    </div> 
</div>

  
@endsection