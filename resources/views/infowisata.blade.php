<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/infowisata.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/YouTubePopUp.css')}}">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
          
    <div class="menu">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="row text-center menu-list ml-auto">
                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                              <a class="nav-link active" id="pills-informasi-tab" data-toggle="pill" href="#informasi" role="tab" aria-controls="pills-informasi" aria-selected="true">Informasi Wisata</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="pills-penginapan-tab" data-toggle="pill" href="#penginapan" role="tab" aria-controls="pills-penginapan" aria-selected="false">Penginapan</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" id="pills-kuliner-tab" data-toggle="pill" href="#kuliner" role="tab" aria-controls="pills-kuliner" aria-selected="false">Kuliner Daerah</a>
                                            </li>
                                          </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="informasi" role="tabpanel" aria-labelledby="pills-informasi-tab">
                <!--================ Start banner section =================-->
	<section class="home-banner-area relative">
            <div class="container-fluid">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="header-right col-lg-6 col-md-6">
                        <h1 class="main_title">{{$show->namawisata}}</h1>
                        <h5 class="pt-20">
                            {{$show->judultagline}}
                        </h5>
                        <p class="pt-20">
                            {{$show->deskripsitagline}}
                        </p>
                        <a href="#" class="main_btn">
                            INFO DETAIL
                            <img src="img/next.png" alt="">
                        </a>
                    </div>
    
                    <div class="col-lg-6 col-md-6 header-left">
                        <div class="">
                            <img class="img-fluid w-100" src="{{asset('wisata/'.$show->fotowisata)}}" alt="">
                        </div>
                        <div class="video-popup d-flex align-items-center">
                        <a class="play-video video-play-button animate" href="{{$show->urlvidio}}" data-animate="zoomIn"
                             data-duration="1.5s" data-delay="0.1s">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End banner section =================-->
    
        <!--================ Start Popular Place Area =================-->
        <div class="popular-place-area section_gap">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 offset-lg-1">
                        <div class="left-content">
                            <img class="img1 img-fluid" src="{{asset('wisata/'.$show->fotowisata)}}" alt="">
                            <img class="img2 img-fluid" src="{{asset('wisata/'.$show->fotowisata)}}" alt="">
                            <img class="img3 img-fluid" src="{{asset('wisata/'.$show->fotowisata)}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="right-content">
                            <div class="main_title">
                                <h1>{{$show->judul1}}</h1>
                                <p>{{$show->deskripsijudul1}}</p>
                            </div>
                            <div class="counter_area">
                                <div class="top-two">
                                    <!-- single counter -->
                                    <div class="single_counter">
                                        <div class="thumb">
                                            <img src="img/popular/icon1.png" alt="">
                                        </div>
                                        <div class="info-content">
                                            <h4>Fasilitas Terbaik</h4>
                                            
                                        </div>
                                    </div>
                                    <!-- single counter -->
                                    <div class="single_counter">
                                        <div class="thumb">
                                            <img src="img/popular/icon2.png" alt="">
                                        </div>
                                        <div class="info-content">
                                            <h4>Pelayanan</h4>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================ End Popular Place Area =================-->


        <!--================ Start Amenities Area =================-->
        @if($hotel->count() > 0)
        <section class="amenities-area mt-5 section_gap">
            <div class="container">
                <div class="row align-items-end justify-content-left">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="main_title">
                            <h1>Rekomendasi Penginapan</h1>
                            <p>Rekomendasi penginapan terbaik daerah wisata. Kunjungi penginapan dari rekomendasi yang diberikan
                                untuk kenikmatan wisata anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <!-- single-blog -->
                     <?php $count = 0; ?>
                     @foreach ($hotel as $item)
                        <?php if($count == 3) break; ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-amenities">
                                <div class="amenities-thumb">
                                    <img class="img-hotel" src="{{asset('hotel/'.$item->fotohotel)}}" alt="">
                                </div>
                                <div class="amenities-details">
                                    <div class="amenities-meta">
                                        <span>{{ $item->updated_at->format('d M Y - H:i:s') }}</span>
                                    </div>
                                    <h5><a href="#"> {{ $item->namahotel }} </a></h5>
                                    <p>{{ Illuminate\Support\Str::limit($item->deskripsihotel, $limit = 120, $end = '...') }}</p>
                                    <span class="harga-hotel">Harga/malam : Rp.{{ number_format($item->harga,2,',','.') }}</span>
                                </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                     @endforeach
                </div>
            </div>
        </section>
        @endif
        <!--================ End Amenities Area =================-->

        <div class="container section_gap">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="main_title">
                            <h1>{{$show->judul2}}</h1>
                            <p>{{$show->deskripsijudul2}}</p>
                        </div>
                    </div>
                </div>
                <div class="map-frame"><iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="{{$show->urlmap}}"></iframe>
                </div>
            </div>

            </div>

            
            <div class="tab-pane fade" id="penginapan" role="tabpanel" aria-labelledby="pills-penginapan-tab">
                        <!--================ Start Amenities Area =================-->
                <section class="amenities-area section_gap" style="padding:0">
                    <div class="container">
                        <div class="row align-items-end justify-content-left text-right">
                            <div class="col-lg-7"></div>
                            <div class="col-lg-5">
                                <div class="main_title">    
                                    <h1>Rekomendasi Penginapan</h1>
                                    <p>Rekomendasi penginpan terbaik daerah wisata. Kunjungi penginapan dari rekomendasi yang diberikan
                                        untuk kenikmatan wisata anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row " style="margin-bottom:80px">
                            <!-- single-blog -->
                            @foreach ($hotel as $item)
                            <div class="col-lg-4 col-md-4 col-sm-6" style="margin-bottom:30px">
                                <div class="single-amenities">
                                    <div class="amenities-thumb">
                                        <img class="img-hotel" src="{{asset('hotel/'.$item->fotohotel)}}" alt="">
                                    </div>
                                    <div class="amenities-details">
                                        <div class="amenities-meta">
                                            <span>{{ $item->updated_at->format('d M Y - H:i:s') }}</span>
                                        </div>
                                        <h5><a href="#"> {{ $item->namahotel }} </a></h5>
                                        <p>{{ Illuminate\Support\Str::limit($item->deskripsihotel, $limit = 120, $end = '...') }}</p>
                                        <span class="harga-hotel">Harga/malam : Rp.{{ number_format($item->harga,2,',','.') }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!--================ End Amenities Area =================-->
            </div>
            
            <div class="tab-pane fade" id="kuliner" role="tabpanel" aria-labelledby="pills-kuliner-tab">
                <div class="container">
                    <div class="row judul-kuliner">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2>Kuliner Daerah</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="garis"></div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($kuliner as $kuliners)
                        <div class="col-lg-4">
                            <div class="box text-center">
                                <img src="{{asset('kuliner/'.$kuliners->fotokuliner)}}" alt="">
                                <h3> {{ $kuliners->namakuliner }} </h3>
                                <p>{{ Illuminate\Support\Str::limit($kuliners->deskripsikuliner, $limit = 80, $end = '...') }}</p>
                                <span>Harga: {{ number_format($kuliners->hargakuliner,2,',','.') }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            


	<!--================ start footer Area  =================-->
	<footer class="footer-area">
		<div class="container">
			<div class="row footer-top">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Jember Vacation</h6>
						<p>
							Kunjungi dan eksplorasi wisata anda di kota jember
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Navigation Links</h6>
						<div class="row">
							<ul class="col footer-nav">
								<li><a href="index.html">Maps</a></li>
							</ul>   
						</div>
					</div>
				</div>

				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>For business professionals caught between high OEM price mediocre print and graphic.</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default">
										<i class="fa fa-paper-plane" aria-hidden="true"></i>
									</button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <!--================ End footer Area  =================-->


























    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/YouTubePopUp.jquery.js') }}"></script>
    <script type="text/javascript">        
            jQuery("a.play-video").YouTubePopUp();
        
    </script>

</body>

</html>