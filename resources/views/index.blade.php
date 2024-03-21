@extends('layouts.public')
@section('title',"dentlife")

@section('content')
    <div class="w-full bg-green-500    relative m-auto  ">

        
        <header class="absolute  w-full  font-bold">
            <div class="max-w-7xl m-auto flex justify-between py-4">
                <div>
                    DENTLIFE
                </div>
                <div class="flex gap-4">
                    <a href="">Inicio</a>
                    <a href="">Servicios</a>
                    <a href="">Nosotros</a>
                    <a href="">Promociones</a>
                    <a href="">Blog</a>
                </div>
                <div>
                    <a href="">tiktok</a>
                    <a href="">facebook</a>
                </div>
            </div>
        </header>

        <div class="video w-screen h-screen bg-green-500 flex justify-center items-center">
           <video src="{{asset('video-dentlifeperu.mp4')}}" class="w-full" autoplay  controls>

           </video>
        </div>
        <div class="w-full h-32 bg-blue-500">

        </div>
    </div>
@endsection