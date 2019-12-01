<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Jember Vacation location</title>
    <link rel="stylesheet" href="{{asset('css/layoutmaps.css')}}">
    <link rel="stylesheet" href="{{asset('css/partmaps.css')}}">
    <link rel="stylesheet" href="{{asset('css/partkalisat.css')}}">
    <link rel="stylesheet" href="{{asset('css/partwuluhan.css')}}">
    <link rel="stylesheet" href="{{asset('css/partjember.css')}}">
    <link rel="stylesheet" href="{{asset('css/partrambipuji.css')}}">
    <link rel="stylesheet" href="{{asset('css/partpuger.css')}}">
    <link rel="stylesheet" href="{{asset('css/parttanggul.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
    <div class="box">
        <div class="left">
            <button type="button" class="btn btn-info" hre><a href="{{route('maps')}}">KEMBALI</a></button>
            <div class="box-map animated zoomIn">
                @yield('maps')
            </div>
        </div>

        <div class="right">
            <div class="box-konten">
                    @yield('konten')
            </div>
        </div>
    </div>








    <!-- Optional JavaScript -->

    <script>
        function animateCSS(element, animationName, callback) {
        const node = document.querySelector(element)
        node.classList.add('animated', animationName)

        function handleAnimationEnd() {
        node.classList.remove('animated', animationName)
        node.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }

    node.addEventListener('animationend', handleAnimationEnd)
}
    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>



<script>
$('.part-maps').click(function(){
    var datalokasi = $(this).data('lokasi');

    
        $('.part-maps').css({
            'fill':'rgb(223, 223, 223)'
        });
        $(this).css({
        'fill':'#7A93F0'
    });

    $('.distrik').css({
        'display':'none'
    });

    $('.distrik-'+datalokasi).css({
'display':'block'
    });



    // console.log('masuk');


});
</script>

</body>

</html>