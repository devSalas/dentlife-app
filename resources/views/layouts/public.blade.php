<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<style>
    html,body{
        scroll-behavior: smooth;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="scroll-smooth">
    @yield('content')

    <footer class="bg-[#1d1818] text-white">
        <section class="p-12 flex md:flex-row flex-col justify-between gap-12">
            <div class="max-w-60 bg-white ">
              
                <img class="w-full" src="{{asset('img/logo-dent-life-web-2.webp')}}" alt="">
            </div>
            <div class="grid md:grid-cols-3 gap-12">
                <div>
                    <h5 class="text-xl">Llámanos</h5>
                    <p>+51 999 032 000</p>
                </div>
                <div>
                    <h5 class="text-xl">Visitanos</h5>
                    <p>Av. Gran Chimú Nº 753 Urb. Zarate S.J.L.</p>
                </div>
                <div>
                    <h5 class="text-xl">Horario</h5>
                    <p>Lunes - Sabado: 9:00 - 20:45</p>
                    <p>Domingo: Previa cita</p>
                </div>
            </div>

        </section>
        <section class="p-6 border-t border-[#f2efe9]">
            <p class="text-center">
                © Dent Life 2024. Todos los derechos reservados.
            </p>
        </section>
    </footer>

    <x-w />
</body>

</html>