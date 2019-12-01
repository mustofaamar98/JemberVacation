@extends('layout.layoutmaps')
@section('partmaps')
    partmapspuger
@endsection

<h1 class="text-backdrop">DISTRIK TANGGUL</h1>
@section('maps')
    <div class="partmaps box-part">
        <img src="{{asset('img/tanggul.png')}}" alt="" class="tanggul">

        <div class="distrik single-distrik distrik-mayang part-tanggul">
            <ul class="animated bounceIn slow nav nav-tabs" id="myTab" role="tablist" style="border:none">
                <li class="nav-item sumberbaru">
                        <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                        <a class=" active" id="sumberbaru-tab" data-toggle="tab" role="tab" aria-controls="sumberbaru" aria-selected="true" href="#sumberbaru">SUMBERBARU</a>
                    </li>
                    <li class="nav-item bangsalsari">
                        <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                        <a class="" id="bangsalsari-tab" data-toggle="tab" role="tab" aria-controls="bangsalsari" aria-selected="true" href="#bangsalsari">BANGSALSARI</a>
                    </li>
                    <li class="nav-item tanggul">
                        <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                        <a class="" id="tanggul-tab" data-toggle="tab" role="tab" aria-controls="tanggul" aria-selected="true" href="#tanggul">TANGGUL</a>
                    </li>                
        </ul>
            </div>
    </div>
@endsection


@section('konten')
<div class="list-wisata">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="sumberbaru" role="tabpanel" aria-labelledby="sumberbaru-tab">
            <h2 class="judul-lokasi text-right">SUMBERBARU-JEMBER</h2>
            @if($datawisatasumberbaru->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
            @foreach ($datawisatasumberbaru as $itemsumberbaru)
            <div class="row animated zoomIn delay-0.5s">
                        <div class="col text-right">
                                    <h5>{{$itemsumberbaru->namawisata}}</h5> 
                                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemsumberbaru->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                    <a href="{{ url('/infowisata/'.$itemsumberbaru->id_wisata) }}" class="detail">Detail</a>
                                </div>
                        <div class="col-3 text-center">
                        <img src="{{asset('wisata/'.$itemsumberbaru->fotowisata)}}" alt="" class="img--circle mx-auto">
                        </div>
                    </div>
            @endforeach
            @endif
        </div>

        <div class="tab-pane fade" id="bangsalsari" role="tabpanel" aria-labelledby="bangsalsari-tab">
                <h2 class="judul-lokasi text-right">BANGSALSARI-JEMBER</h2>
                @if($datawisatabangsalsari->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisatabangsalsari as $itembangsalsari)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itembangsalsari->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itembangsalsari->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itembangsalsari->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itembangsalsari->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>

        <div class="tab-pane fade" id="tanggul" role="tabpanel" aria-labelledby="tanggul-tab">
                <h2 class="judul-lokasi text-right">TANGGUL-JEMBER</h2>
                @if($datawisatatanggul->count() == 0)
                <div class="vidio">
                    <video style="width: 850px;" autoplay loop muted>
                                <source src="{{asset('/vidio/preview.mp4')}}" type="video/mp4">
                            </video>
                </div>
                @else 
                @foreach ($datawisatatanggul as $itemtanggul)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemtanggul->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemtanggul->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itemtanggul->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemtanggul->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
                @endif
        </div>
    </div> 
</div>

  
@endsection