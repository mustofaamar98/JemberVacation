<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/layoutdasboard.css')}}">


  <title>Dashboard Admin</title>
</head>

<body>

  <div class="container">
    @foreach ($user as $users)
    <div class="row text-center admin" style="margin-top: 50px; margin-bottom: 100px">
      <div class="col-lg-12">
        <img src="{{asset('profil/'.$users->fotoprofil)}}" alt="">
        <h4>{{$users->name}}</h4>
        <h5>Admin</h5>
        <!-- Button trigger modal -->
        <a href="{{ route('logout')}}" class="btn btn-danger">Logout</a>
        <button style="margin-right:10px" type="button" class="btn btn-update button-showdataprofil"
        data-toggle="modal" data-target="#modalupdateprofil" data-id='{{ $users->id}}'>Ubah</button>
      </div>
    </div>
    <!-- Modal UPDATE -->
<div class="modal fade" id="modalupdateprofil" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Wisata</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form method="POST" action="" enctype="multipart/form-data" class="form-updatedataprofil">
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control data-name" id="name" aria-describedby=""
            placeholder="Masukkan nama users" name="name" required>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" class="form-control data-email" id="email" aria-describedby=""
            placeholder="Masukkan Email" name="email" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">File Foto</label>
          <input type="file" class="form-control-file data-filefoto" id="exampleFormControlFile1" name="fotoprofil">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="sumbit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
</div>

       {{-- end modal --}}
    @endforeach

    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-wisata-tab" data-toggle="tab" href="#nav-wisata" role="tab"
          aria-controls="nav-wisata" aria-selected="true">Data Wisata</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
          aria-controls="nav-profile" aria-selected="false">Data Hotel</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
          aria-controls="nav-contact" aria-selected="false">Kuliner</a>
      </div>
    </nav>

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div class="tab-content" id="nav-tabContent">
      <br>
      <div class="tab-pane active" id="nav-wisata" role="tabpanel" aria-labelledby="nav-wisata-tab">
        <!-- Button trigger modal -->
        <button type="button" class="btn add-data" data-toggle="modal" data-target="#exampleModalCenter">
          Tambah Data
        </button>
        <br><br>

        <div class="table100 ver2 m-b-110">
          <table id="tablewisata" class="table table-striped">
            <div class="table100-head">
              <thead>
                <tr class="row100 head">
                  <th scope="col" class="cell100 column1">Nomor</th>
                  <th scope="col" class="cell100 column2">Nama Wisata</th>
                  <th scope="col" class="cell100 column2">Daerah Wisata</th>
                  <th scope="col" class="cell100 column2">District</th>
                  <th scope="col" class="cell100 column4">Deskirpsi Wisata</th>
                  <th scope="col" class="cell100 column5">Action</th>
                </tr>
              </thead>
            </div>

            <div class="table100-body js-pscroll">
              <tbody>
                @foreach ($wisata as $wisatas)
                <tr class="baris-kolom">
                  <th class="cell100 column1" scope="row">{{ $loop->iteration }}</th>
                  <td class="cell100 column2">{{ $wisatas->namawisata }}</td>
                  <td class="cell100 column2">{{ $wisatas->daerah}}</td>
                  <td class="cell100 column2">{{ $wisatas->nama_district}}</td>
                  <td class="cell100 column4">
                    {{ Illuminate\Support\Str::limit($wisatas->deskripsitagline, $limit = 20, $end = '...') }}</td>
                  <td class="cell100 column5">
                    <button style="margin-right:10px" type="button" class="btn btn-update button-showdata"
                      data-toggle="modal" data-target="#modalupdate" data-id='{{ $wisatas->id_wisata}}'>Ubah</button>
                    <a type="button" onclick="return confirm('Are you sure?')" class="btn btn-delete"
                      href="{{ url('layoutdashboard/delete/'.$wisatas->id_wisata) }}">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </div>
          </table>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <!-- Button trigger modal -->
        <button type="button" class="btn add-data" data-toggle="modal" data-target="#adddatahotel">
          Tambah Data Penginapan
        </button>
        <br><br>

        <div class="table100 ver2 m-b-110">
          <table id="tablehotel" class="table table-striped">
            <div class="table100-head">
              <thead>
                <tr class="row100 head">
                  <th scope="col" class="cell100 column1">Nomor</th>
                  <th scope="col" class="cell100 column2">Nama Hotel</th>
                  <th scope="col" class="cell100 column3">Daerah</th>
                  <th scope="col" class="cell100 column3">Lokasi Wisata</th>
                  <th scope="col" class="cell100 column5">Action</th>
                </tr>
              </thead>
            </div>

            <div class="table100-body js-pscroll">
              <tbody>
                @foreach ($hotel as $hotels)
                <tr class="baris-kolom">
                  <th class="cell100 column1" scope="row">{{ $loop->iteration }}</th>
                  <td class="cell100 column2">{{ $hotels->namahotel }}</td>
                  <td class="cell100 column3">{{ $hotels->daerah}}</td>
                  <td class="cell100 column3">{{ $hotels->datawisata->namawisata}}</td>
                  <td class="cell100 column5">
                    <button style="margin-right:10px" type="button" class="btn btn-update button-showdatahotel"
                      data-toggle="modal" data-target="#updatehotel" data-id='{{ $hotels->id_hotel}}'>Ubah</button>
                    <a type="button" onclick="return confirm('Are you sure?')" class="btn btn-delete"
                      href="{{ url('layoutdashboard/deletes/'.$hotels->id_hotel) }}">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </div>
          </table>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <!-- Button trigger modal -->
        <button type="button" class="btn add-data" data-toggle="modal" data-target="#adddatakuliner">
          Tambah Data Kuliner
        </button>
        <br><br>

        <div class="table100 ver2 m-b-110">
          <table id="tablekuliner" class="table table-striped">
            <div class="table100-head">
              <thead>
                <tr class="row100 head">
                  <th scope="col" class="cell100 column1">Nomor</th>
                  <th scope="col" class="cell100 column2">Nama Kuliner</th>
                  <th scope="col" class="cell100 column3">Deskripsi Kuliner</th>
                  <th scope="col" class="cell100 column4">Harga</th>
                  <th scope="col" class="cell100 column5">Action</th>
                </tr>
              </thead>
            </div>

            <div class="table100-body js-pscroll">
              <tbody>
                @foreach ($kuliner as $kuliners)
                <tr class="baris-kolom">
                  <th class="cell100 column1" scope="row">{{ $loop->iteration }}</th>
                  <td class="cell100 column2">{{ $kuliners->namakuliner }}</td>
                  <td class="cell100 column3">
                    {{ Illuminate\Support\Str::limit($kuliners->deskripsikuliner, $limit = 20, $end = '...') }}</td>
                  <td class="cell100 column4">{{ $kuliners->hargakuliner}}</td>
                  <td class="cell100 column5">
                    <button style="margin-right:10px" type="button" class="btn btn-update button-showdatakuliner"
                      data-toggle="modal" data-target="#updatedatakuliner"
                      data-id='{{ $kuliners->id_kuliner}}'>Ubah</button>
                    <a type="button" onclick="return confirm('Are you sure?')" class="btn btn-delete"
                      href="{{ url('layoutdashboard/deletess/'.$kuliners->id_kuliner) }}">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal TAMBAH DATA KULINER -->
  <div class="modal fade" id="adddatakuliner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Kuliner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{route('adddatakuliner')}}" enctype="multipart/form-data">
          <div class="modal-body">
            @csrf
            <select value="{{old('daerah')}}" class="custom-select my-1 mr-sm-2 " id="inlineFormCustomSelectPref"
              name="daerah" required>
              <option value="">Pilih Daerah</option>
                           <option value="22">Batang</option>
              <option value="7">Silo</option>
              <option value="8">Mumbulsari</option>
              <option value="6">Tumperejo</option>
              <option value="21">Sukowono</option>
              <option value="18">Kalisat</option>
              <option value="20">Sumberjambe</option>
              <option value="19">Ledokombo</option>
              <option value="17">Arjasa</option>
              <option value="23">Wirolegi</option>
              <option value="24">Jember</option>
              <option value="16">Panti</option>
              <option value="10">Rambipuji</option>
              <option value="25">Mangli</option>
              <option value="9">Jenggawah</option>
              <option value="11">Balung</option>
              <option value="4">Wuluhan</option>
              <option value="5">Ambulu</option>
              <option value="12">Umbulsari</option>
              <option value="1">Kencong</option>
              <option value="3">Puger</option>
              <option value="2">Gumukmas</option>
              <option value="13">Sumberbaru</option>
              <option value="15">Bangsalsari</option>
              <option value="14">Tanggul</option>
            </select>
            <div class="form-group">
              <label for="">Nama Kuliner</label>
              <input value="{{old('namakuliner')}}" type="text" class="form-control" id="namakuliner"
                aria-describedby="" placeholder="Masukkan nama Kuliner" name="namakuliner" required>
            </div>
            <div class="form-group">
              <label for="">Deskripsi Kuliner</label>
              <textarea value="{{old('deskripsikuliner')}}" class="form-control" id="exampleFormControlTextarea1"
                rows="3" name="deskripsikuliner" name="deskripsikuliner" required></textarea>
            </div>
            <div class="form-group">
              <label for="">Harga </label>
              <input value="{{old('hargakuliner')}}" type="text" class="form-control" id="hargakuliner"
                aria-describedby="" placeholder="harga kuliner" name="hargakuliner" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">File Foto</label>
              <input value="" type="file" class="form-control-file" id="exampleFormControlFile1" name="fotokuliner"
                value="" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="sumbit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal UBAH DATA KULINER -->
  <div class="modal fade" id="updatedatakuliner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Kuliner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="" enctype="multipart/form-data" class="form-updatedatakuliner">
          <div class="modal-body">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <select class="custom-select my-1 mr-sm-2 data-daerah3" id="inlineFormCustomSelectPref" name="daerah"
              required>
              <option value="">Pilih Daerah</option>
                           <option value="22">Batang</option>
              <option value="7">Silo</option>
              <option value="8">Mumbulsari</option>
              <option value="6">Tumperejo</option>
              <option value="21">Sukowono</option>
              <option value="18">Kalisat</option>
              <option value="20">Sumberjambe</option>
              <option value="19">Ledokombo</option>
              <option value="17">Arjasa</option>
              <option value="23">Wirolegi</option>
              <option value="24">Jember</option>
              <option value="16">Panti</option>
              <option value="10">Rambipuji</option>
              <option value="25">Mangli</option>
              <option value="9">Jenggawah</option>
              <option value="11">Balung</option>
              <option value="4">Wuluhan</option>
              <option value="5">Ambulu</option>
              <option value="12">Umbulsari</option>
              <option value="1">Kencong</option>
              <option value="3">Puger</option>
              <option value="2">Gumukmas</option>
              <option value="13">Sumberbaru</option>
              <option value="15">Bangsalsari</option>
              <option value="14">Tanggul</option>
            </select>
            <div class="form-group">
              <label for="">Nama Kuliner</label>
              <input type="text" class="form-control data-namakuliner" id="namakuliner" aria-describedby=""
                placeholder="Masukkan nama Kuliner" name="namakuliner" required>
            </div>
            <div class="form-group">
              <label for="">Deskripsi</label>
              <textarea class="form-control data-deskripsikuliner" id="deskripsikuliner" rows="3"
                name="deskripsikuliner" name="deskripsikuliner" required></textarea>
            </div>
            <div class="form-group">
              <label for="">Harga </label>
              <input type="text" class="form-control data-hargakuliner" id="hargakuliner" aria-describedby=""
                placeholder="harga kuliner" name="hargakuliner" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">File Foto</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fotokuliner" value="">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="sumbit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal TAMBAH DATA HOTEL -->
  <div class="modal fade" id="adddatahotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Hotel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{route('adddatahotel')}}" enctype="multipart/form-data">
          <div class="modal-body">
            @csrf
            <select class="custom-select my-1 mr-sm-2 " id="inlineFormCustomSelectPref" name="daerah" required>
              <option value="">Pilih Daerah</option>
              <option value="22">Batang</option>
              <option value="7">Silo</option>
              <option value="8">Mumbulsari</option>
              <option value="6">Tumperejo</option>
              <option value="21">Sukowono</option>
              <option value="18">Kalisat</option>
              <option value="20">Sumberjambe</option>
              <option value="19">Ledokombo</option>
              <option value="17">Arjasa</option>
              <option value="23">Wirolegi</option>
              <option value="24">Jember</option>
              <option value="16">Panti</option>
              <option value="10">Rambipuji</option>
              <option value="25">Mangli</option>
              <option value="9">Jenggawah</option>
              <option value="11">Balung</option>
              <option value="4">Wuluhan</option>
              <option value="5">Ambulu</option>
              <option value="12">Umbulsari</option>
              <option value="1">Kencong</option>
              <option value="3">Puger</option>
              <option value="2">Gumukmas</option>
              <option value="13">Sumberbaru</option>
              <option value="15">Bangsalsari</option>
              <option value="14">Tanggul</option>
            </select>
            <select class="custom-select my-1 mr-sm-2" name="wisata" id="wisata">
              <option value="">Pilih Wisata</option>
              @foreach ($wisata as $wisatas)
              <option value="{{$wisatas->id_wisata}}">{{ $wisatas->namawisata }}</option>
              @endforeach
            </select>
            <div class="form-group">
              <label for="">Nama Hotel</label>
              <input type="text" class="form-control" id="namawisata" aria-describedby=""
                placeholder="Masukkan nama hotel" name="namahotel" required>
            </div>
            <div class="form-group">
              <label for="">Alamat Hotel</label>
              <input type="text" class="form-control" id="namawisata" aria-describedby="" placeholder="alamat hotel"
                name="alamathotel" required>
            </div>
            <div class="form-group">
              <label for="">Harga/malam</label>
              <input type="text" class="form-control" id="namawisata" aria-describedby="" placeholder="Harga/malan"
                name="harga" required>
            </div>
            <div class="form-group">
              <label for="">deskripsi hotel</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsihotel"
                required></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">File Foto</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fotohotel" value=""
                required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="sumbit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Modal UPDATE DATA HOTEL -->
  <div class="modal fade" id="updatehotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Hotel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="" enctype="multipart/form-data" class="form-updatedatahotel">
          <div class="modal-body">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <select class="custom-select my-1 mr-sm-2 data-daerah2" id="inlineFormCustomSelectPref" name="daerah"
              required>
              <option value="">Pilih Daerah</option>
              <option value="22">Batang</option>
              <option value="7">Silo</option>
              <option value="8">Mumbulsari</option>
              <option value="6">Tumperejo</option>
              <option value="21">Sukowono</option>
              <option value="18">Kalisat</option>
              <option value="20">Sumberjambe</option>
              <option value="19">Ledokombo</option>
              <option value="17">Arjasa</option>
              <option value="23">Wirolegi</option>
              <option value="24">Jember</option>
              <option value="16">Panti</option>
              <option value="10">Rambipuji</option>
              <option value="25">Mangli</option>
              <option value="9">Jenggawah</option>
              <option value="11">Balung</option>
              <option value="4">Wuluhan</option>
              <option value="5">Ambulu</option>
              <option value="12">Umbulsari</option>
              <option value="1">Kencong</option>
              <option value="3">Puger</option>
              <option value="2">Gumukmas</option>
              <option value="13">Sumberbaru</option>
              <option value="15">Bangsalsari</option>
              <option value="14">Tanggul</option>
            </select>
            <select class="custom-select my-1 mr-sm-2 data-wisata" name="wisata" id="wisata" class="data-wisata">
              <option value="">Pilih Wisata</option>
              @foreach ($wisata as $wisatas)
              <option value="{{$wisatas->id_wisata}}">{{ $wisatas->namawisata }}</option>
              @endforeach
            </select>
            <div class="form-group">
              <label for="">Nama Hotel</label>
              <input type="text" class="form-control data-namahotel" id="namawisata" aria-describedby=""
                placeholder="Masukkan nama hotel" name="namahotel" required>
            </div>
            <div class="form-group">
              <label for="">Alamat Hotel</label>
              <input type="text" class="form-control data-alamathotel" id="namawisata" aria-describedby=""
                placeholder="alamat hotel" name="alamathotel" required>
            </div>
            <div class="form-group">
              <label for="">Harga/malam</label>
              <input type="text" class="form-control data-harga" id="namawisata" aria-describedby=""
                placeholder="Harga/malan" name="harga" required>
            </div>
            <div class="form-group">
              <label for="">deskripsi hotel</label>
              <textarea class="form-control data-deskripsihotel" id="exampleFormControlTextarea1" rows="3"
                name="deskripsihotel" required></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">File Foto</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fotohotel" value="">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="sumbit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>






  <!-- Modal TAMBAH DATA WISATA -->

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Wisata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{route('adddatawisata')}}" enctype="multipart/form-data">
          <div class="modal-body">
            @csrf
            <select class="custom-select my-1 mr-sm-2 " id="inlineFormCustomSelectPref" name="daerah" required>
              <option value="">Pilih Daerah</option>
                           <option value="22">Batang</option>
              <option value="7">Silo</option>
              <option value="8">Mumbulsari</option>
              <option value="6">Tumperejo</option>
              <option value="21">Sukowono</option>
              <option value="18">Kalisat</option>
              <option value="20">Sumberjambe</option>
              <option value="19">Ledokombo</option>
              <option value="17">Arjasa</option>
              <option value="23">Wirolegi</option>
              <option value="24">Jember</option>
              <option value="16">Panti</option>
              <option value="10">Rambipuji</option>
              <option value="25">Mangli</option>
              <option value="9">Jenggawah</option>
              <option value="11">Balung</option>
              <option value="4">Wuluhan</option>
              <option value="5">Ambulu</option>
              <option value="12">Umbulsari</option>
              <option value="1">Kencong</option>
              <option value="3">Puger</option>
              <option value="2">Gumukmas</option>
              <option value="13">Sumberbaru</option>
              <option value="15">Bangsalsari</option>
              <option value="14">Tanggul</option>
            </select>
            <div class="form-group">
              <label for="">Nama Wisata</label>
              <input type="text" class="form-control" id="namawisata" aria-describedby=""
                placeholder="Masukkan nama wisata" name="namawisata" required>
            </div>
            <div class="form-group">
              <label for="">Tagline</label>
              <input type="text" class="form-control" id="namawisata" aria-describedby="" placeholder="tagline"
                name="judultagline" required>
              <label for="">Deskripsi tagline</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsitagline"
                required></textarea>
            </div>
            <div class="form-group">
              <label for="">Judul1</label>
              <input type="text" class="form-control" id="namawisata" aria-describedby="" placeholder="Masukkan judul1"
                name="judul1" required>
              <label for="">Des1</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsijudul1"
                required></textarea>
            </div>
            <div class="form-group">
              <label for="">Judul2</label>
              <input type="text" class="form-control" id="namawisata" aria-describedby="" placeholder="Masukkan judul2"
                name="judul2" required>
              <label for="">Des2</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsijudul2"
                required></textarea>
            </div>
            <div class="form-group">
              <label for="">URL Vidio</label>
              <input type="text" class="form-control" id="namawisata" aria-describedby="" placeholder="url vidio"
                name="urlvidio" required>
            </div>
            <div class="form-group">
              <label for="">URL Map</label>
              <input type="text" class="form-control" id="namawisata" aria-describedby="" placeholder="url map"
                name="urlmap" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">File Foto</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fotowisata">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="sumbit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal UPDATE -->
  <div class="modal fade" id="modalupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Wisata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="" enctype="multipart/form-data" class="form-updatedata">
          <div class="modal-body">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <select class="custom-select my-1 mr-sm-2 data-daerah" id="inlineFormCustomSelectPref" name="daerah"
              required>
              <option value="">Pilih Daerah</option>
              <option value="22">Batang</option>
              <option value="7">Silo</option>
              <option value="8">Mumbulsari</option>
              <option value="6">Tumperejo</option>
              <option value="21">Sukowono</option>
              <option value="18">Kalisat</option>
              <option value="20">Sumberjambe</option>
              <option value="19">Ledokombo</option>
              <option value="17">Arjasa</option>
              <option value="23">Wirolegi</option>
              <option value="24">Jember</option>
              <option value="16">Panti</option>
              <option value="10">Rambipuji</option>
              <option value="25">Mangli</option>
              <option value="9">Jenggawah</option>
              <option value="11">Balung</option>
              <option value="4">Wuluhan</option>
              <option value="5">Ambulu</option>
              <option value="12">Umbulsari</option>
              <option value="1">Kencong</option>
              <option value="3">Puger</option>
              <option value="2">Gumukmas</option>
              <option value="13">Sumberbaru</option>
              <option value="15">Bangsalsari</option>
              <option value="14">Tanggul</option>
            </select>
            <div class="form-group">
              <label for="">Nama Wisata</label>
              <input type="text" class="form-control data-namawisata" id="namawisata" aria-describedby=""
                placeholder="Masukkan nama wisata" name="namawisata" required>
            </div>
            <div class="form-group">
              <label for="">Tagline</label>
              <input type="text" class="form-control data-tagline" id="namawisata" aria-describedby=""
                placeholder="tagline" name="judultagline" required>
              <label for="">Deskripsi tagline</label>
              <textarea class="form-control data-deskripsitagline" id="exampleFormControlTextarea1" rows="3"
                name="deskripsitagline" required></textarea>
            </div>
            <div class="form-group">
              <label for="">Judul1</label>
              <input type="text" class="form-control data-judul1" id="namawisata" aria-describedby=""
                placeholder="Masukkan judul 1" name="judul1" required>
              <label for="">Deskripsi 1</label>
              <textarea class="form-control data-deskripsijudul1" id="exampleFormControlTextarea1" rows="3"
                name="deskripsijudul1" required></textarea>
            </div>
            <div class="form-group">
              <label for="">Judul2</label>
              <input type="text" class="form-control data-judul2" id="namawisata" aria-describedby=""
                placeholder="Masukkan judul 2" name="judul2" required>
              <label for="">Deskripsi 2</label>
              <textarea class="form-control data-deskripsijudul2" id="exampleFormControlTextarea1" rows="3"
                name="deskripsijudul2" required></textarea>
            </div>
            <div class="form-group">
              <label for="">URL Vidio</label>
              <input type="text" class="form-control data-urlvidio" id="namawisata" aria-describedby=""
                placeholder="url vidio" name="urlvidio" required>
            </div>
            <div class="form-group">
              <label for="">URL Map</label>
              <input type="text" class="form-control data-urlmap" id="namawisata" aria-describedby=""
                placeholder="url map" name="urlmap" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">File Foto</label>
              <input type="file" class="form-control-file data-filefoto" id="exampleFormControlFile1" name="fotowisata">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="sumbit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>









  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script src="{{asset('js/datatables.min.js')}}"></script>

  <script>
    $('.js-pscroll').each(function () {
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function () {
        ps.update();
      })
    });
  </script>


  <script>
    $(document).ready(function () {
      $('#tablewisata').DataTable();
      $('#tablehotel').DataTable();
      $('#tablekuliner').DataTable();
    });
  </script>


  <script>

    $('.button-showdata').click(function () {
      var id_wisata = $(this).data('id');
      var updateurl = "{{url('/layoutdashboard/update')}}" + '/' + id_wisata;
      var urldata = "{{url('/layoutdashboard')}}" + '/' + id_wisata;

      $('.form-updatedata').attr('action', updateurl);

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        type: "POST",
        dataType: 'json',
        url: urldata,
        data: { '_token': $('input[name=_token]').val() },
        success: function (data) {
          console.log(data.daerah);
          console.log(data.namawisata);
          console.log(data.judultagline);
          console.log(data.deskripsitagline);
          console.log(data.judul1);
          console.log(data.deskripsijudul1);
          console.log(data.judul2);
          console.log(data.deskripsijudul2);
          console.log(data.urlmap);
          console.log(data.urlvidio);
          console.log(data.fotowisata);

          $('.data-daerah').val(data.daerah);
          $('.data-namawisata').val(data.namawisata);
          $('.data-tagline').val(data.judultagline);
          $('.data-deskripsitagline').val(data.deskripsitagline);
          $('.data-judul1').val(data.judul1);
          $('.data-deskripsijudul1').val(data.deskripsijudul1);
          $('.data-judul2').val(data.judul2);
          $('.data-deskripsijudul2').val(data.deskripsijudul2);
          $('.data-urlmap').val(data.urlmap);
          $('.data-urlvidio').val(data.urlvidio);
          $('.data-fotowisata').val(data.fotowisata);

        }
      }).done(function (data) {
        console.log('suksess');
      });
    });

  </script>


  <script>

    $('.button-showdatahotel').click(function () {
      var id_hotel = $(this).data('id');
      var updateurl = "{{url('/layoutdashboard/updatehotel')}}" + '/' + id_hotel;
      var urldata = "{{url('/layoutdashboards')}}" + '/' + id_hotel;

      $('.form-updatedatahotel').attr('action', updateurl);

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        type: "POST",
        dataType: 'json',
        url: urldata,
        data: { '_token': $('input[name=_token]').val() },
        success: function (data) {
          console.log(data.daerah2);
          console.log(data.namahotel);
          console.log(data.alamathotel);
          console.log(data.harga);
          console.log(data.deskripsihotel);
          console.log(data.id_wisata);



          $('.data-daerah2').val(data.daerah);
          $('.data-namahotel').val(data.namahotel);
          $('.data-alamathotel').val(data.alamathotel);
          $('.data-harga').val(data.harga);
          $('.data-deskripsihotel').val(data.deskripsihotel);
          $('.data-wisata').val(data.id_wisata);


        }
      }).done(function (data) {
        console.log('suksess');
      });
    });

  </script>

  <script>

    $('.button-showdatakuliner').click(function () {
      var id_kuliner = $(this).data('id');
      var updateurl = "{{url('/layoutdashboard/updatekuliner')}}" + '/' + id_kuliner;
      var urldata = "{{url('/layoutdashboardss')}}" + '/' + id_kuliner;

      $('.form-updatedatakuliner').attr('action', updateurl);

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        type: "POST",
        dataType: 'json',
        url: urldata,
        data: { '_token': $('input[name=_token]').val() },
        success: function (data) {
          console.log(data.daerah2);
          console.log(data.namakuliner);
          console.log(data.deskripikuliner);
          console.log(data.hargakuliner);



          $('.data-daerah3').val(data.daerah);
          $('.data-namakuliner').val(data.namakuliner);
          $('.data-deskripsikuliner').val(data.deskripsikuliner);
          $('.data-hargakuliner').val(data.hargakuliner);


        }
      }).done(function (data) {
        console.log('suksess');
      });
    });

  </script>
  <script>

    $('.button-showdataprofil').click(function () {
      var id_profil = $(this).data('id');
      var updateurl = "{{url('/layoutdashboard/updateprofil')}}" + '/' + id_profil;
      var urldata = "{{url('/layoutdashboardsss')}}" + '/' + id_profil;

      $('.form-updatedataprofil').attr('action', updateurl);

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        type: "POST",
        dataType: 'json',
        url: urldata,
        data: { '_token': $('input[name=_token]').val() },
        success: function (data) {
          console.log(data.name);
          console.log(data.email);

          $('.data-name').val(data.name);
          $('.data-email').val(data.email);

        }
      }).done(function (data) {
        console.log('suksess');
      });
    });

  </script>


</body>

</html>
