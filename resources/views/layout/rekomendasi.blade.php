<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/rekomendasi.css')}}">

  <title>Rekomendasi</title>
</head>

<body>
  <div class="row" style="width:100%;">
    <div class="col-lg-9">
      <div class="box-left">
        <div class="row">
          <div class="box">
            <div class="judul">
              <h3 class="mb-3"> Rekomendasi </h3>
            </div>
            <div class="row">
              @foreach($hotel as $datas)
            <div class="col-lg-4 sembunyi3 hotel{{$datas->id_hotel}}" >
                <div class="card">
                  <img src="{{asset('hotel/'.$datas->fotohotel)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <small>13 Nov 2019</small>
                    <h6>{{$datas->namahotel}}</h6>
                    <p class="card-text">{{$datas->deskripsihotel}}</p>
                    <p>Harga: Rp. {{$datas->harga}}</p>
                  </div>
                </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="box-right">
      <h5 class="judul">Cek Rekomendasi Hotel</h5>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Pilih Distrik</label>
          <select class="form-control" id="distrik"  name="distrik">
            <option value="">Pilih Distrik</option>
            <option value="1">Mayang</option>
            <option value="2">Wuluhan</option>
            <option value="3">Puger</option>
            <option value="4">Kalisat</option>
            <option value="5">Jember</option>
            <option value="6">Rambipuji</option>
            <option value="7">Tanggul</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Pilih Daerah</label>
          <select class="form-control" id="daerah" name="daerah" id="daerah">
            <option value="" class="">Pilih Daerah</option>
            <option value="22" class="sembunyi 22">Batang</option>
            <option value="7" class="sembunyi 7">Silo</option>
            <option value="8" class="sembunyi 8">Mumbulsari</option>
            <option value="6" class="sembunyi 6">Tumperejo</option>
            <option value="21" class="sembunyi 21">Sukowono</option>
            <option value="18" class="sembunyi 18">Kalisat</option>
            <option value="20" class="sembunyi 20">Sumberjambe</option>
            <option value="19" class="sembunyi 19">Ledokombo</option>
            <option value="17" class="sembunyi 17">Arjasa</option>
            <option value="23" class="sembunyi 23">Wirolegi</option>
            <option value="24" class="sembunyi 24">Jember</option>
            <option value="16" class="sembunyi 16">Panti</option>
            <option value="10" class="sembunyi 10">Rambipuji</option>
            <option value="25" class="sembunyi 25">Mangli</option>
            <option value="9" class="sembunyi 9">Jenggawah</option>
            <option value="11" class="sembunyi 11">Balung</option>
            <option value="4" class="sembunyi 4">Wuluhan</option>
            <option value="5" class="sembunyi 5">Ambulu</option>
            <option value="12" class="sembunyi 12">Umbulsari</option>
            <option value="1" class="sembunyi 1">Kencong</option>
            <option value="3" class="sembunyi 3">Puger</option>
            <option value="2" class="sembunyi 2">Gumukmas</option>
            <option value="13" class="sembunyi 13">Sumberbaru</option>
            <option value="15" class="sembunyi 15">Bangsalsari</option>
            <option value="14" class="sembunyi 14">Tanggul</option>
          </select>
        </div>
        <hr>
          <h5>Daftar Wisata Daerah</h5>
          @foreach ($data as $datas)    
          <div class="form-group form-cek sembunyi2 daerah{{$datas->daerah}}">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" value="{{$datas->id_wisata}}" name="rd">
          <label class="form-check-label" for="exampleCheck1">{{$datas->namawisata}}</label>
          </div>
          @endforeach

          <br>
          <button type="button" class="rekomendasi">Cek Rekomendasi</button>


      

   
  </div>



  </div>
  </div>


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
  //     $(document).ready(function(){ 
  //   $('select #combo').on('change',function(){ 
  //       var kategori = $('#combo :selected').text();
  //       consol.log(kategori);
  //   });
  // });
  
    $(document).ready(function () {
      $('.sembunyi').hide();
      $('.sembunyi2').hide();
      $('.sembunyi3').hide();
      $('#distrik').change(function () {
        var distrik = this.value;
        var updateurl = "{{url('tampilkan')}}" + '/' + distrik;
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: "GET",
          dataType: 'json',
          url: updateurl,
          data: { '_token': $('input[name=_token]').val() },
          success: function (data) {
            $('.sembunyi').hide();
            $.each(data, function (index, value) {
            // console.log(value.id_district);
              $('.'+value.id_daerah+'').show()
            });
          }
          }).done(function (data) {
          console.log('suksess');
        });
      });

      $('#daerah').change(function () {
        var daerah = this.value;
        var updateurl = "{{url('tampilkan2')}}" + '/' + daerah;
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: "GET",
          dataType: 'json',
          url: updateurl,
          data: { '_token': $('input[name=_token]').val() },
          success: function (data) {
            $('.sembunyi2').hide();
            $.each(data, function (index, value) {
            // console.log(value.id_district);
              $('.daerah'+value.daerah+'').show()
            });
          }
          }).done(function (data) {
          console.log('suksess');
        });
      });



      $(".rekomendasi").click(function() { 
        var data = [];
        $.each($("input[name='rd']:checked"), function(){
                data.push($(this).val());
            });
        var url = "{{url('rekomendasi')}}"+ '/' + data;
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: "GET",
          dataType: 'json',
          url: url,
          data: { '_token': $('input[name=_token]').val() },
          success: function (data) {
          var $i;
          for (i = 0; i < 3; i++) {
            $('.hotel'+data[i][0]['id_hotel']+'').show()
          }  

          }
          }).done(function (data) {
          console.log('suksess');
        });
        // DO WORK
        });
    });
  </script>
</body>

</html>