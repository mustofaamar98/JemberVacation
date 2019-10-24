@extends('layout.layoutmaps')
@section('partmaps')
    partmapswuluhan
@endsection

<h1 class="text-backdrop">DISTRIK WULUHAN</h1>
@section('maps')
    <div class="partmaps box-part">
        <img src="{{asset('img/wuluhan.png')}}" alt="" class="wuluhan">

        <div class="distrik single-distrik distrik-mayang part-wuluhan">
                <ul class="animated bounceIn slow nav nav-tabs" id="myTab" role="tablist" style="border:none">
                        <li class="balung">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class=" active" id="balung-tab" data-toggle="tab" role="tab" aria-controls="balung" aria-selected="true" href="#balung">BALUNG</a>
                            </li>
                            <li class="wuluhan">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class="" id="wuluhan-tab" data-toggle="tab" role="tab" aria-controls="wuluhan" aria-selected="true" href="#wuluhan">WULUHAN</a>
                            </li>
                            <li class="ambulu">
                                <img src="{{asset('img/icon/placeholder.png')}}" alt="">
                                <a class="" id="ambulu-tab" data-toggle="tab" role="tab" aria-controls="ambulu" aria-selected="true" href="#ambulu">AMBULU</a>
                            </li>
                            
                </ul>
            </div>
    </div>
@endsection


@section('konten')
<div class="list-wisata">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="balung" role="tabpanel" aria-labelledby="balung-tab">
            <h2 class="judul-lokasi text-right">BALUNG-JEMBER</h2>
            @foreach ($datawisatabalung as $itembalung)
            <div class="row animated zoomIn delay-0.5s">
                        <div class="col text-right">
                                    <h5>{{$itembalung->namawisata}}</h5> 
                                    <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itembalung->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                    <a href="{{ url('/infowisata/'.$itembalung->id_wisata) }}" class="detail">Detail</a>
                                </div>
                        <div class="col-3 text-center">
                        <img src="{{asset('wisata/'.$itembalung->fotowisata)}}" alt="" class="img--circle mx-auto">
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="tab-pane fade" id="wuluhan" role="tabpanel" aria-labelledby="wuluhan-tab">
                <h2 class="judul-lokasi text-right">WULUHAN-JEMBER</h2>
                @foreach ($datawisatawuluhan as $itemwuluhan)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemwuluhan->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemwuluhan->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itemwuluhan->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemwuluhan->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
        </div>

        <div class="tab-pane fade" id="ambulu" role="tabpanel" aria-labelledby="ambulu-tab">
                <h2 class="judul-lokasi text-right">AMBULU-JEMBER</h2>
                @foreach ($datawisataambulu as $itemambulu)
                <div class="row animated zoomIn delay-0.5s">
                            <div class="col text-right">
                                        <h5>{{$itemambulu->namawisata}}</h5> 
                                        <p style="width: 500px" class="ml-auto">{{ Illuminate\Support\Str::limit($itemambulu->deskripsitagline, $limit = 120, $end = '...') }}</p>
                                        <a href="{{ url('/infowisata/'.$itemambulu->id_wisata) }}" class="detail">Detail</a>
                                    </div>
                            <div class="col-3 text-center">
                            <img src="{{asset('wisata/'.$itemambulu->fotowisata)}}" alt="" class="img--circle mx-auto">
                            </div>
                        </div>
                @endforeach
        </div>

    </div> 
</div>

  
@endsection