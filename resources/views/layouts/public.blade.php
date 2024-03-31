<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <x-tailwindcss-link></x-tailwindcss-link>
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
 <link rel="stylesheet" href="{{asset('css/font.css')}}">


 <style>
    html{
        scroll-behavior: smooth
    }

    .text-shadow {
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
    }



    @font-face {
    font-family: 'Oceanwide QLt';
    src: url('fonts/Oceanwide-Semibold.otf') ;
    font-weight:bold ;
    font-style: bold;
    }  


    @font-face {
    font-family: 'Tw cent MT';
    src: url('fonts/Tw Cen MT.ttf');
    }
    
    @font-face {
    font-family: 'Sans Serif FLF';
    src: url('fonts/SansSerifBookFLF.otf');
    font-weight:bold;
    font-style: bold;
    }
    @font-face {
    font-family: 'Antipasto Pro';
    src: url('fonts/antipasto.demibold.ttf');
    font-weight:bold;
    font-style: bold;
    }

    h1{
        font-family: 'Oceanwide QLt'
    }

    h2{
        font-family: 'Sans Serif FLF'
    }
    .font-Sans-flf{
        font-family: 'Sans Serif FLF'
    }
    .font-oceanwide{
        font-family: 'Oceanwide QLt';
    }

    .font_Tw_cent{
        font-family: 'Tw Cent MT';
    }
    .font_Antipasto_pro{
        font-family: 'Antipasto Pro'
    }

  </style>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="scroll-smooth">
    @yield('content')

    <footer class="bg-[#1d1818] text-white font_Tw_cent sm:text-lg">
        <section class="p-6 lg:p-12 flex md:flex-row flex-col justify-between gap-12 max-w-7xl m-auto xl:px-0">
            <div class="sm:m-auto">
              
                <img class="w-full max-w-40 md:max-w-60" src="{{asset('img/dentlife_logo_white.png')}}" alt="">
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6  lg:gap-12 md:justify-center md:items-center">
                <div class="md:text-center">
                    <h5 class="text-xl font-oceanwide">Llámanos</h5>
                    <p>+51 999 032 000</p>
                </div>
                <div>
                    <h5 class="text-xl font-oceanwide">Visitanos</h5>
                    <p>Av. Gran Chimú Nº 753 Urb. Zarate S.J.L.</p>
                </div>
                <div>
                    <h5 class="text-xl font-oceanwide">Horario</h5>
                    <p>Lunes - Sabado: 9:00 - 20:45</p>
                    <p>Domingo: Previa cita</p>
                </div>
            </div>

        </section>
        <hr class=" border-t border-[#f2efe9]">
        <section class="p-6 flex justify-center items-center max-w-7xl lg:justify-between m-auto lg:px-0">
            <p class="text-center">
                © Dent Life 2024. Todos los derechos reservados.
            </p>
            <p>
                Hecho por <a href="https://sunetya.site/" target="_blank" rel="noopener noreferrer" class="text-fourth">Sunetya</a>
            </p>
        </section>
    </footer>

    <x-w />
</body>

</html>