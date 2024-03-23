@extends('layouts.public')
@section('title',"dentlife")

@section('content')
<style>
    .text-shadow {
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
    }
  </style>
<div class="w-full   relative m-auto  scroll-smooth">


    <header class="relative sm:absolute w-full  font-bold">
        <x-header></x-header>
    </header>

    <div class="video w-screen  aspect-video ">
        <video src="{{asset('video-dentlifeperu.mp4')}} " class="w-full object-cover" autoplay muted>
        </video>
    </div>

    {{-- promociones --}}
    <div id="promociones" class="w-full bg-primary   py-16 sm:pb-32">
        <div class="max-w-7xl flex flex-col sm:flex-row py-8 px-4 sm:p-4  gap-16 mx-4 sm:m-auto  border-4 border-fourth  rounded-2xl  justify-center items-center sm:gap-32 ">

            <div class="text-center flex flex-col gap-4">
                <h2 " class="text-2xl md:text-5xl text-white font-semibold">¡Solicita GRATIS <br> tu primera consulta!</h2>
                <p class="text-white">Consulta a nuestro dentista en línea hoy  <br>
                        mismo</p>
                <button class=" m-auto py-2 px-6 md:py-4 md:px-10 bg-fifth rounded-xl text-primary font-semibold">Consulta Gratis</button>
            </div>
            <figure class="">
                <img  class="w-full max-w-sm" src="https://png.pngtree.com/png-clipart/20240103/original/pngtree-young-lady-with-hands-near-face-in-christmas-hat-png-image_14007558.png" alt="">
            </figure>
        </div>
    </div>
    {{-- especialidades --}}
    <div class="w-full bg-fourth">
        <h2 class="text-2xl lg:text-3xl text-center pt-16 pb-4 px-4">ESPECIALIDADES MAS SOLICITADAS</h2>
        <div class="pb-8 m-auto max-w-sm px-4 ">
            <div class="w-full h-[2px] bg-fifth"></div>
        </div>
        <div class="cardsEspecialidad max-w-7xl m-auto grid sm:grid-cols-2 lg:grid-cols-4 gap-4 pb-32 px-3">

            <div class="bg-white  p-2 pb-8 rounded-xl overflow-hidden">
                <figure class="w-full aspect-square bg-blue-500 rounded-xl overflow-hidden">
                    <img class="w-full aspect-square object-cover" src="{{asset('img/DISENO-DE-SONRISA-1.webp')}}" alt="">
                </figure>
                <H3 class="text-center my-4 text-xl font-semibold ">
                    <span class="text-fourth"> ESPECIALISTAS EN</span><br>
                    <span class="">DISEÑO DE SONRISA </span><br>
                    <span>SIN DESGASTAR DIENTES </span> </H3>
                    <div class="max-w-32 m-auto mb-8">
                        <div class="w-full h-[1px] bg-fifth" ></div>
                    </div>
                <P class="px-4 text-pretty"><strong>Sonríe con confianza</strong>  y sin preocupaciones. Conoce nuestro método innovador de <strong>Diseño de Sonrisa sin dolor ni desgaste</strong>  y descubre una nueva forma de sonreír.</P>
            </div>
            <div class="bg-white  p-2 pb-8 rounded-xl overflow-hidden">
                <figure class="w-full aspect-square bg-blue-500 rounded-xl overflow-hidden">
                    <img class="w-full aspect-square object-cover" src="{{asset('img/ORTODONCIA-BRACKETS.webp')}}" alt="">
                </figure>
                <H3 class="text-center my-4 text-xl font-semibold ">
                    <span class="text-fourth"> ESPECIALISTAS EN</span><br>
                    <span class="">ORTODONCIA </span><br>
                    <span>BRACKETS </span> </H3>
                    <div class="max-w-32 m-auto mb-8">
                        <div class="w-full h-[1px] bg-fifth" ></div>
                    </div>
                <P class="px-4 text-pretty"><strong>Consigue una sonrisa perfectamente alineada</strong>. Conoce a nuestros expertos en ortodoncia y comienza tu viaje hacia una sonrisa más saludable.</P>
            </div>
            <div class="bg-white  p-2 pb-8 rounded-xl overflow-hidden">
                <figure class="w-full aspect-square bg-blue-500 rounded-xl overflow-hidden">
                    <img class="w-full aspect-square object-cover" src="{{asset('img/ENDODONCIA-EN-UNA-SOLA-CITA.webp')}}" alt="">
                </figure>
                <H3 class="text-center my-4 text-xl font-semibold ">
                    <span class="text-fourth"> ESPECIALISTAS EN</span><br>
                    <span class="">ENDODONCIA</span><br>
                    <span>EN UNA SOLA CITA </span> </H3>
                    <div class="max-w-32 m-auto mb-8">
                        <div class="w-full h-[1px] bg-fifth" ></div>
                    </div>
                <P class="px-4 text-pretty"> <strong>¡Calma el dolor en una sola cita! </strong>  No dejes que el dolor arruine tu día y salva tu diente con nuestro tratamiento de endodoncia con tecnología rotativa. </P>
            </div>
            <div class="bg-white  p-2 pb-8 rounded-xl overflow-hidden">
                <figure class="w-full aspect-square bg-blue-500 rounded-xl overflow-hidden">
                    <img class="w-full aspect-square" src="{{asset('img/IMPLANTE-DENTAL.webp')}}" alt="">
                </figure>
                <H3 class="text-center my-4 text-xl font-semibold ">
                    <span class="text-fourth"> ESPECIALISTAS EN</span><br>
                    <span class="">IMPLANTE DENTAL </span><br>
                    <span>SIN DESGASTAR DIENTES </span> </H3>
                    <div class="max-w-32 m-auto mb-8">
                        <div class="w-full h-[1px] bg-fifth" ></div>
                    </div>
                <P class="px-4 text-pretty"><strong> Recupera la función masticatoria y estética </strong> con nuestros implantes dentales. Haz realidad tu deseo de una sonrisa perfecta. Nuestros expertos en implantes dentales están aquí para ayudarte.</P>
            </div>

            
            
        </div>
    </div>
    {{-- testimonios --}}
    <div class="pb-32 bg-secondary">
        <h2 class="relative text-5xl md:text-7xl font-semibold text-fourth opacity-70 text-center pt-16">
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

                            <img class=" w-24 h-24 border-4 rounded-full border-fourth bg-blue-500 z-10 object-cover"  src="{{asset('img/doctor/avatar-perfil.webp')}}" alt="">
                        </div>

                        <div class="relative p-4 bg-primary m-auto rounded-xl text-white max-w-sm pt-20 flex flex-col gap-4 items-center">
                            <p class="font-bold text-lg"> Fiorella Terrones</p>
                            <p class="text-center">El equipo de ortodoncia aquí no solo transformó la sonrisa de mi hija, sino que también transformó su vida. ¡No puedo agradecerles lo suficiente por el increíble trabajo que hicieron!
                            </p>
                            <button class="bg-fourth py-2 px-4 m-auto rounded-xl text-primary">VER VIDEO</button>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        
                        <div class="w-full relative top-10  flex justify-center">
                            <img class=" w-24 h-24 border-4 rounded-full border-fourth bg-blue-500 z-10 object-cover"  src="{{asset('img/doctor/avatar-perfil.webp')}}" alt="">
                        </div>

                        <div class="relative p-4 bg-primary m-auto rounded-xl text-white max-w-sm pt-20 flex flex-col gap-4 items-center justify-center">
                            <p class="font-bold text-lg">Diana Cajahuaringa</p>
                            <p class="text-center">Gracias por la paciencia, la empatía y buena atención a mi y mi hija y tenemos mucha confianza. Y culmine mi tratamiento, tengo mis dientes alineados y no me lastimó al comer y me siento muy feliz porque puede sonreír gracias a Dent Life.</p>
                            <button class="bg-fourth py-2 px-4 m-auto rounded-xl text-primary">VER VIDEO</button>
                        </div>
                    </div>
                    <div class="swiper-slide p-2 ">
                        
                        <div class="w-full relative top-10  flex justify-center">
                            <img class=" w-24 h-24 border-4 rounded-full border-fourth bg-blue-500 z-10 object-cover"  src="{{asset('img/doctor/avatar-perfil.webp')}}" alt="">
                        </div>

                        <div class="relative p-4 bg-primary m-auto rounded-xl text-white max-w-sm pt-20 flex flex-col gap-4 items-center">
                            <p class="font-bold text-lg">Sthefany Inga </p>
                            <p class="text-center"> ¡Increíble transformación! No puedo creer lo mucho que ha cambiado mi sonrisa en tan poco tiempo. Recomiendo a ojos cerrados a Dent Life para cualquier persona que busque resultados sorprendentes.</p>
                            <button class="bg-fourth py-2 px-4 m-auto rounded-xl text-primary">VER VIDEO</button>
                        </div>
                    </div>
                    
                    <div class="swiper-slide p-2 ">
                        
                        <div class="w-full relative top-10  flex justify-center">
                            <img class=" w-24 h-24 border-4 rounded-full border-fourth bg-blue-500 z-10 object-cover"  src="{{asset('img/doctor/avatar-perfil.webp')}}" alt="">
                        </div>

                        <div class="relative p-4 bg-primary m-auto rounded-xl text-white max-w-sm pt-20 flex flex-col gap-4 items-center">
                            <p class="font-bold text-lg">Sthefany Inga </p>
                            <p class="text-center"> ¡Increíble transformación! No puedo creer lo mucho que ha cambiado mi sonrisa en tan poco tiempo. Recomiendo a ojos cerrados a Dent Life para cualquier persona que busque resultados sorprendentes.</p>
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
                300: {
                slidesPerView: 1,
                spaceBetween: 20
                },
                // when window width is >= 480px
                650: {
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
        <h2 id="servicios" class="relative text-5xl md:text-7xl font-semibold text-[#c1a088] opacity-70 text-center  pt-16 mb-16">
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
    {{-- Equiopo dent life --}}

    <div class="pb-16 bg-secondary">
        <h2 class="relative text-5xl md:text-7xl font-semibold text-[#c1a087] opacity-70 text-center  pt-16 mb-16">
            TEAM DENT LIFE
            <p class="absolute text-2xl md:text-3xl text-primary bottom-0 w-full text-center"> EQUIPO DENT LIFE </p>
        </h2>
        <div class="max-w-7xl m-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 px-4 gap-4">
            <div class=" gap-4  overflow-hidden text-center ">
                <img class="rounded-xl mb-4 border-4 border-fourth" src="{{asset('img/doctor/ESTHEFANY-OLIVERA.jpg')}}" alt="">
 
                <h3 class="text-3xl mb-2">Dra. Esthefany Olivera</h3>
                <p class="text-xl mb-8">Odontología Integral</p>
            </div>
            <div class=" gap-4  overflow-hidden text-center ">
                <img class="rounded-xl mb-4 border-4 border-fourth" src="{{asset('img/doctor/EVELYN-QUINTO-DL.jpg')}}" alt="">
 
                <h3 class="text-3xl mb-2">Dra. Evelyn Quinto</h3>
                <p class="text-xl mb-8">Estética Dental</p>
            </div>
            <div class=" gap-4  overflow-hidden text-center ">
                <img class="rounded-xl w-full mb-4 border-4 border-fourth" src="{{asset('img/doctor/JORGE-ARANDA-DL.jpg')}}" alt="">
 
                <h3 class="text-3xl mb-2">Dr. Jorge Aranda</h3>
                <p class="text-xl mb-8">Ortodoncista</p>
            </div>
            <div class=" gap-4  overflow-hidden text-center ">
                <img class="rounded-xl w-full mb-4 border-4 border-fourth" src="{{asset('img/doctor/STEPHANY-NUÑEZ.jpg')}}" alt="">
 
                <h3 class="text-3xl mb-2">Dra. Stephany Nuñez</h3>
                <p class="text-xl mb-8">Endodoncista</p>
            </div>
        </div>
    </div>
    {{-- ubicación --}}
    <div class="pb-32 bg-secondary">
        <h2 class="relative text-5xl md:text-7xl font-semibold text-[#c1a087] opacity-70 text-center  pt-16 mb-16">
            VISÍTANOS
            <p class="absolute text-2xl md:text-3xl text-primary bottom-0 w-full text-center"> VISÍTANOS </p>
        </h2>
        <div class="max-w-7xl m-auto aspect-video px-4 sm:px-8 xl:px-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.5665482075989!2d-77.00158863770126!3d-12.025186271297892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f052abe7e1%3A0x2fbf4bb90931677f!2sDent%20Life%20Cl%C3%ADnica%20dental!5e0!3m2!1sen!2spe!4v1711199736586!5m2!1sen!2spe" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


@endsection

