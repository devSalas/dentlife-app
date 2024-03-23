{{-- puedes agregarlo en un contenedor que ocupe todo el ancho --}}
<div class="max-w-7xl m-auto flex justify-between items-center py-4 px-2">
    <div>
        <a href="{{ url('/') }}">
            <img src="{{asset('img/LOGO-DENT-LIFE-WEB.webp')}}" class="relative max-w-60 z-10" alt="LOGO DENT LIFE CLINICA DENTAL">
        </a>
    </div>
    <div class="flex  gap-16 justify-center items-center">
        <div class=" sm:flex gap-4 hidden  text-lg text-white z-10 ">
            <a href="" class="text-shadow hover:scale-125 ease-in duration-300">Inicio</a>
            <a href="{{ url('#servicios') }}" class="text-shadow hover:scale-125 ease-in duration-300">Servicios</a>
            <a href="nosotros" class="text-shadow hover:scale-125 ease-in duration-300">Nosotros</a>
            <a href="{{ url('/') }}#promociones" class="text-shadow hover:scale-125 ease-in duration-300">Promociones</a>
            <a href="" class="text-shadow hover:scale-125 ease-in duration-300">Blog</a>
        </div>
        <div class=" hidden sm:flex h-10 gap-4 z-10">
            <a href="https://www.facebook.com/DentlifeSjl/" class=" bg-[#b2896b] rounded-lg hover:scale-125 ease-in duration-300" >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 24 24">
                    <path fill="white" d="M12.683 22v-7.745h-2.607v-3.018h2.607V9.01a3.637 3.637 0 0 1 3.882-3.99a21.32 21.32 0 0 1 2.329.119v2.7h-1.599c-1.253 0-1.495.596-1.495 1.47v1.927h2.989l-.39 3.018h-2.6V22z" />
                    <path fill="#00000000" d="M20.999 2H2.998a1 1 0 0 0-1 1v18.001a1 1 0 0 0 1 1h18.001a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1m-2.105 5.84h-1.599c-1.253 0-1.495.596-1.495 1.47v1.926h2.989l-.39 3.019h-2.6V22h-3.116v-7.745h-2.607v-3.019h2.607V9.01a3.637 3.637 0 0 1 3.882-3.99a21.37 21.37 0 0 1 2.329.12z"/>
                </svg>
            </a>
            <a href="https://www.instagram.com/dentlife25/" class=" bg-[#b2896b] rounded-lg hover:scale-125 ease-in duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 24 24"><path fill="white" d="M18 3H6C4.3 3 3 4.3 3 6v12c0 1.7 1.3 3 3 3h12c1.7 0 3-1.3 3-3V6c0-1.7-1.3-3-3-3m-6 6c1.7 0 3 1.3 3 3s-1.3 3-3 3s-3-1.3-3-3s1.3-3 3-3m3.8-2c0-.7.6-1.2 1.2-1.2s1.2.6 1.2 1.2s-.5 1.2-1.2 1.2s-1.2-.5-1.2-1.2M18 19H6c-.6 0-1-.4-1-1v-6h2c0 2.8 2.2 5 5 5s5-2.2 5-5h2v6c0 .6-.4 1-1 1"/></svg>
            </a>
            <a href=""  class=" bg-[#b2896b] rounded-lg p-[2px] hover:scale-125 ease-in duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 24 24"><path fill="white" d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.42a8.225 8.225 0 0 1 2.41 5.83c0 4.54-3.7 8.23-8.24 8.23c-1.48 0-2.93-.39-4.19-1.15l-.3-.17l-3.12.82l.83-3.04l-.2-.32a8.188 8.188 0 0 1-1.26-4.38c.01-4.54 3.7-8.24 8.25-8.24M8.53 7.33c-.16 0-.43.06-.66.31c-.22.25-.87.86-.87 2.07c0 1.22.89 2.39 1 2.56c.14.17 1.76 2.67 4.25 3.73c.59.27 1.05.42 1.41.53c.59.19 1.13.16 1.56.1c.48-.07 1.46-.6 1.67-1.18c.21-.58.21-1.07.15-1.18c-.07-.1-.23-.16-.48-.27c-.25-.14-1.47-.74-1.69-.82c-.23-.08-.37-.12-.56.12c-.16.25-.64.81-.78.97c-.15.17-.29.19-.53.07c-.26-.13-1.06-.39-2-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.12-.24-.01-.39.11-.5c.11-.11.27-.29.37-.44c.13-.14.17-.25.25-.41c.08-.17.04-.31-.02-.43c-.06-.11-.56-1.35-.77-1.84c-.2-.48-.4-.42-.56-.43c-.14 0-.3-.01-.47-.01"/></svg>
            </a>
            <a href="https://www.tiktok.com/@evelynladentista" class=" bg-[#b2896b] rounded-lg p-[4px] hover:scale-125 ease-in duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-full" viewBox="0 0 24 24"><path fill="white" d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.592 2.592 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48"/></svg>
            </a>
        </div>
        <div class="sm:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z"/></svg>
        </div>
    </div>
</div>  