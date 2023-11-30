<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Qwords.com: Cloud Web Hosting Indonesia Akses Cepat Aman</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.qwords.com/wp-content/uploads/2022/12/cropped-logo-qw-light-32x32.png" sizes="32x32" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&family=Secular+One&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style type="text/css">
       * { 
            font-family: 'Plus Jakarta Sans', sans-serif
        }

        section {
            height: 100vh;
        }

   </style>
   <body style="overflow-x: hidden;">

   <div>
      @include('components/base/header')
      @include('components/parts/banner')
      @include('components/parts/domain-checker')
      @include('components/parts/package')
      @include('components/parts/contact')
      @include('components/base/footer')
   </div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/lottie-player.js"></script>

<script>
    $(document).ready(function(){
        const NavBar = $("#navbar");

        $(window).scroll(function(e) {
            if($(document).scrollTop() > 0) {
                NavBar.removeClass("bg-transparent");
                NavBar.addClass("bg-white");
            } else {
                NavBar.removeClass("bg-white");
                NavBar.addClass("bg-transparent");
            }
        });

        setTimeout(() => {
            $("#banner-image").removeClass("animate__zoomIn animate__delay-1s");
            $("#banner-image").addClass("animate__heartBeat");
        }, 1800);

        setTimeout(() => {
            $("#dicount-percentage").removeClass("animate__zoomIn animate__delay-4s");
            $("#dicount-percentage").addClass("animate__heartBeat animate__slow animate__infinite");
        }, 4800);
        

    });
</script>
</body>
</head>
</html>
