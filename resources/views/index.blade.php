@extends('layouts.public')
@section('title',"dentlife")

@section('content')
<div class="w-full   relative m-auto  ">


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

    <div class="video w-screen h-screen  flex justify-center items-center">
        <video src="{{asset('video-dentlifeperu.mp4')}}" class="w-full" autoplay controls muted>
           </video>
        </div>

        {{-- promociones --}}
        <div class="w-full bg-primary  py-16 sm:py-32">
            <div class="max-w-7xl flex flex-col sm:flex-row py-8 px-4 sm:p-4  gap-16 mx-4 sm:m-auto  border-4 border-fourth  rounded-2xl  justify-center items-center sm:gap-32 ">

                <div class="text-center flex flex-col gap-4">
                    <h2 class="text-5xl text-white font-semibold">¡Solicita GRATIS <br> tu primera consulta!</h2>
                    <p class="text-white">Consulta a nuestro dentista en línea hoy  <br>
                         mismo</p>
                    <button class=" m-auto py-4 px-10 bg-fifth rounded-xl text-primary font-semibold">Consulta Gratis</button>
                </div>
                <figure class="">
                    <img  class="w-full max-w-sm" src="https://png.pngtree.com/png-clipart/20240103/original/pngtree-young-lady-with-hands-near-face-in-christmas-hat-png-image_14007558.png" alt="">
                </figure>
            </div>
        </div>
        {{-- especialidades --}}
        <div class="w-full bg-fourth">
            <h2 class="text-2xl text-center pt-16 pb-4 px-4">ESPECIALIDADES MAS SOLICITADAS</h2>
            <div class="pb-8 m-auto max-w-sm px-4 ">
                <div class="w-full h-[2px] bg-fifth"></div>
            </div>
            <div class="cardsEspecialidad max-w-7xl m-auto grid sm:grid-cols-2 lg:grid-cols-4 gap-4 pb-32 px-3">

                <div class="bg-white  p-2 pb-8 rounded-xl overflow-hidden">
                    <figure class="w-full aspect-square bg-blue-500 rounded-xl overflow-hidden">
                        <img class="w-full aspect-square" src="{{asset('img/DISENO-DE-SONRISA-1.webp')}}" alt="">
                    </figure>
                    <H3 class="text-center my-4 text-xl font-semibold ">
                        <span class="text-fourth"> ESPECIALISTAS EN</span><br>
                        <span class="">DISEÑO DE SONRISA </span><br>
                        <span>SIN DESGASTAR DIENTES </span> </H3>
                        <div class="max-w-32 m-auto mb-8">
                            <div class="w-full h-[1px] bg-fifth" ></div>
                        </div>
                    <P class="px-4 text-pretty">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores earum fuga expedita, perspiciatis vero odio magnam, sed laboriosam quidem magni non porro ut dicta quibusdam nulla error officia accusamus adipisci!</P>
                </div>
                <div class="bg-white  p-2 pb-8 rounded-xl overflow-hidden">
                    <figure class="w-full aspect-square bg-blue-500 rounded-xl overflow-hidden">
                        <img class="w-full aspect-square" src="{{asset('img/DISENO-DE-SONRISA-1.webp')}}" alt="">
                    </figure>
                    <H3 class="text-center my-4 text-xl font-semibold ">
                        <span class="text-fourth"> ESPECIALISTAS EN</span><br>
                        <span class="">DISEÑO DE SONRISA </span><br>
                        <span>SIN DESGASTAR DIENTES </span> </H3>
                        <div class="max-w-32 m-auto mb-8">
                            <div class="w-full h-[1px] bg-fifth" ></div>
                        </div>
                    <P class="px-4 text-pretty">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores earum fuga expedita, perspiciatis vero odio magnam, sed laboriosam quidem magni non porro ut dicta quibusdam nulla error officia accusamus adipisci!</P>
                </div>
                <div class="bg-white  p-2 pb-8 rounded-xl overflow-hidden">
                    <figure class="w-full aspect-square bg-blue-500 rounded-xl overflow-hidden">
                        <img class="w-full aspect-square" src="{{asset('img/DISENO-DE-SONRISA-1.webp')}}" alt="">
                    </figure>
                    <H3 class="text-center my-4 text-xl font-semibold ">
                        <span class="text-fourth"> ESPECIALISTAS EN</span><br>
                        <span class="">DISEÑO DE SONRISA </span><br>
                        <span>SIN DESGASTAR DIENTES </span> </H3>
                        <div class="max-w-32 m-auto mb-8">
                            <div class="w-full h-[1px] bg-fifth" ></div>
                        </div>
                    <P class="px-4 text-pretty">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores earum fuga expedita, perspiciatis vero odio magnam, sed laboriosam quidem magni non porro ut dicta quibusdam nulla error officia accusamus adipisci!</P>
                </div>
                <div class="bg-white  p-2 pb-8 rounded-xl overflow-hidden">
                    <figure class="w-full aspect-square bg-blue-500 rounded-xl overflow-hidden">
                        <img class="w-full aspect-square" src="{{asset('img/DISENO-DE-SONRISA-1.webp')}}" alt="">
                    </figure>
                    <H3 class="text-center my-4 text-xl font-semibold ">
                        <span class="text-fourth"> ESPECIALISTAS EN</span><br>
                        <span class="">DISEÑO DE SONRISA </span><br>
                        <span>SIN DESGASTAR DIENTES </span> </H3>
                        <div class="max-w-32 m-auto mb-8">
                            <div class="w-full h-[1px] bg-fifth" ></div>
                        </div>
                    <P class="px-4 text-pretty">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores earum fuga expedita, perspiciatis vero odio magnam, sed laboriosam quidem magni non porro ut dicta quibusdam nulla error officia accusamus adipisci!</P>
                </div>

                
                
            </div>
            <div class="mb-16">

            </div>
        </div>
        {{-- testimonios --}}
        <div class="pb-32 bg-secondary">
            <h2 class="relative text-5xl md:text-7xl font-semibold text-fourth opacity-70 text-center">
                TESTIMONIOS
                <p class="absolute text-2xl md:text-3xl text-primary bottom-0 w-full text-center">NUESTRO PACIENTES </p>
            </h2>
            <p class="p-4 text-pretty max-w-sm m-auto my-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio expedita nulla ad aut, minus non et corrupti culpa ducimus alias explicabo similique necessitatibus asperiores soluta laudantium vel pariatur officia doloremque?
            </p>
            <!-- Slider main container -->
            <div class="">
                <div class="swiper max-w-7xl p-8">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper  ">
                    <!-- Slides -->
                    <div class="swiper-slide p-2 ">
                        
                        <div class="w-full relative top-10  flex justify-center relative">

                            <img class=" w-24 h-24 border-4 rounded-full border-fourth bg-blue-500 z-10"  src="" alt="">
                        </div>

                        <div class="relative p-4 bg-primary m-auto rounded-xl text-white max-w-sm pt-20 flex flex-col gap-4 items-center">
                            <p>Rosa Lopez</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, vero ab incidunt minus animi exercitationem ratione quas, nam sapiente, fugiat tempore?.</p>
                            <button class="bg-fourth py-2 px-4 m-auto rounded-xl text-primary">VER VIDEO</button>
                        </div>
                    </div>
                    <div class="swiper-slide p-2 ">
                        
                        <div class="w-full relative top-10  flex justify-center">
                            <img class=" w-24 h-24 border-4 rounded-full border-fourth bg-blue-500 z-10"  src="" alt="">
                        </div>

                        <div class="relative p-4 bg-primary m-auto rounded-xl text-white max-w-sm pt-20 flex flex-col gap-4 items-center">
                            <p>Rosa Lopez</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, vero ab incidunt minus animi exercitationem ratione quas, nam sapiente, fugiat tempore?.</p>
                            <button class="bg-fourth py-2 px-4 m-auto rounded-xl text-primary">VER VIDEO</button>
                        </div>
                    </div>
                    <div class="swiper-slide p-2 ">
                        
                        <div class="w-full relative top-10  flex justify-center">
                            <img class=" w-24 h-24 border-4 rounded-full border-fourth bg-blue-500 z-10"  src="" alt="">
                        </div>

                        <div class="relative p-4 bg-primary m-auto rounded-xl text-white max-w-sm pt-20 flex flex-col gap-4 items-center">
                            <p>Rosa Lopez</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, vero ab incidunt minus animi exercitationem ratione quas, nam sapiente, fugiat tempore?.</p>
                            <button class="bg-fourth py-2 px-4 m-auto rounded-xl text-primary">VER VIDEO</button>
                        </div>
                    </div>
                    <div class="swiper-slide p-2 ">
                        
                        <div class="w-full relative top-10  flex justify-center">
                            <img class=" w-24 h-24 border-4 rounded-full border-fourth bg-blue-500 z-10"  src="" alt="">
                        </div>

                        <div class="relative p-4 bg-primary m-auto rounded-xl text-white max-w-sm pt-20 flex flex-col gap-4 items-center">
                            <p>Rosa Lopez</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, vero ab incidunt minus animi exercitationem ratione quas, nam sapiente, fugiat tempore?.</p>
                            <button class="bg-fourth py-2 px-4 m-auto rounded-xl text-primary">VER VIDEO</button>
                        </div>
                    </div>
                   
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination relative  mt-10"></div>
                
                    <!-- If we need navigation buttons -->
                    
                    <div class="swiper-button-prev text-black font-bold "></div>
                    <div class="swiper-button-next text-black font-bold"></div>
                
                    <!-- If we need scrollbar -->
                    {{-- <div class="swiper-scrollbar"></div> --}}
                </div>

            </div>
            <script>
                const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                slidesPerView: 3,

                breakpoints: {
                    // when window width is >= 320px
                    320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                    },
                    // when window width is >= 480px
                    480: {
                    slidesPerView: 2,
                    spaceBetween: 30
                    },
                    // when window width is >= 640px
                    1000: {
                    slidesPerView: 3,
                    spaceBetween: 40
                    }
                },
                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
                });
            </script>
        </div>    
        {{-- servicios --}} 
        <div class="bg-fourth w-full pb-32">
            <h2 class="relative text-5xl md:text-7xl font-semibold text-[#c1a087] opacity-70 text-center  pt-16 mb-16">
                SERVICIOS
                <p class="absolute text-2xl md:text-3xl text-primary bottom-0 w-full text-center">NUESTRO PACIENTES </p>
            </h2>
            <div class="max-w-7xl m-auto grid grid-cols-1 place-content-center sm:grid-rows-2 lg:grid-flow-col sm:grid-cols-2 lg:grid-cols-[1fr,1fr,1fr] gap-4 p-4 ">
                {{-- items de servicios --}}
                    <div class="relative max-w-sm m-auto">
                        <div class="absolute w-full h-full  text-white text-center flex  flex-col justify-end justify-items-end z-10 bg-black/30 rounded-xl">
                            <p class="pb-4 text-2xl font-bold underline underline-offset-8 decoration-fifth">BLANQUEAMIENTO <br> DENTAL</p>
                        </div>
                        <img src="{{asset('img/BLANQUEAMIENTO-DENTAL.webp')}}" class="rounded-xl border-4 border-fifth  " alt="blanqueamiento dental ">      
                    </div>
                    
                    <div class="relative max-w-sm m-auto">
                        <div class="absolute w-full h-full  text-white text-center flex  flex-col justify-end justify-items-end z-10 bg-black/30 rounded-xl">
                            <p class="pb-4 text-2xl font-bold underline underline-offset-8 decoration-fifth">PROTESIS DENTAL</p>
                        </div>
                        <img src="{{asset('img/PROTESIS-DENTAL.webp')}}" class=" rounded-xl border-4 border-fifth" alt="blanqueamiento dental">      
                    </div> 

                    <div class="max-w-sm lg:max-w-lg lg:h-full lg:aspect-[1/1]   lg:row-span-2  m-auto flex justify-center items-center relative">

                        <div class="absolute w-full h-full  text-white text-center flex  flex-col justify-end justify-items-end z-10 bg-black/30 rounded-xl">
                            <p class="pb-4 text-2xl font-bold underline underline-offset-8 decoration-fifth">ORTODONCIA</p>
                            {{-- <div class="w-full px-8">
                                <hr class="h-[3px] border-0 bg-fifth mb-4">
                            </div> --}}
                        </div>

                        <img src="{{asset('img/BRACKETS.webp')}}" class=" rounded-xl border-4 border-fifth  object-cover h-full" alt="blanqueamiento dental">      
                    </div>

                    <div class="relative max-w-sm m-auto">
                        <div class="absolute w-full h-full  text-white text-center flex  flex-col justify-end justify-items-end z-10 bg-black/30 rounded-xl">
                            <p class="pb-4 text-2xl font-bold underline underline-offset-8 decoration-fifth">ENDODONCIA </p>
                            
                        </div>
                        <img src="{{asset('img/ENDODONCIA.webp')}}" class="rounded-xl border-4 border-fifth  " alt="blanqueamiento dental ">      
                    </div>

                    <div class="relative max-w-sm m-auto">
                        <div class="absolute w-full h-full  text-white text-center flex  flex-col justify-end justify-items-end z-10 bg-black/30 rounded-xl">
                            <p class="pb-4 text-2xl font-bold underline underline-offset-8 decoration-fifth">DISEÑO DE SONRISA</p>
                        </div>
                        <img src="{{asset('img/DISENO-DE-SONRISA-2.JPG')}}" class="rounded-xl border-4 border-fifth  " alt="blanqueamiento dental ">      
                    </div>
                

            </div>
        </div>
    </div>
        </video>
    </div>
</div>


@endsection

