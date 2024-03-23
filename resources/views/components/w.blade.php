<div class="pulse size-16 rounded-full bg-green-500 fixed bottom-8 right-8 z-40">
</div>


<style>
  .uno {
    animation: uno .2s 30s both;
  }

  @keyframes uno {
    from {
      opacity: 0;
    }
  }

  .pulse {
    animation: pulse-animate 1s infinite;
  }

  @keyframes pulse-animate {
    to {
      transform: scale(1.5);
      opacity: 0;
    }
  }
</style>

<button id="btn-w" class="size-16 rounded-full shadow-lg bg-green-500 flex items-center justify-center fixed z-50 bottom-8 right-8">
  <div class="w-icon">
    <x-w-icon />
  </div>
  <div style="display: none;" class="x-icon">
    <x-x-icon />
  </div>
</button>

<div class="uno size-4 flex justify-center items-center rounded-full bg-red-500 fixed z-50 pointer-events-none bottom-20 right-8 text-white text-xs">1</div>

<section id="ws" class="bg-white w-96 rounded-xl shadow-lg fixed bottom-28 right-8 overflow-hidden hidden">
  <header class="bg-green-500 px-4 py-6 flex items-center gap-4">
    <div>
      <x-w-icon />
    </div>
    <div>
      <div class="text-white text-lg">Iniciar una conversación</div>
      <div class="text-white text-sm">¡Hola! Haga clic en uno de nuestros miembros a continuación para chatear WhatsApp</div>
    </div>
  </header>
  <div class="px-4 py-6">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=51999032000" rel="nofollow noopener noreferrer" class="bg-neutral-100 border-l-2 border-green-500 p-4 rounded flex gap-4 hover:shadow-lg transition-shadow duration-300">
      <div><x-w-icon /></div>
      <div>
        <div class="text-sm">Dent Life</div>
        <div class="text-neutral-400 text-xs">Escríbenos para una cualquier consulta</div>
      </div>
    </a>
  </div>
</section>

<style>
  [data-ws] {
    display: block;
    animation: ws-active .4s both;
  }

  @keyframes ws-active {
    from {
      opacity: 0;
      transform: translateY(100px);
    }
  }
</style>

<script>
  const btnW = document.getElementById("btn-w")
  const ws = document.getElementById("ws")
  const wIcon = document.querySelector(".w-icon")
  const xIcon = document.querySelector(".x-icon")
  const uno = document.querySelector(".uno")

  btnW.addEventListener("click", () => {

    if (ws.hasAttribute('data-ws')) {
      ws.removeAttribute('data-ws');
      wIcon.style.display = "block"
      xIcon.style.display = "none"
    } else {
      ws.setAttribute('data-ws', '');
      wIcon.style.display = "none"
      xIcon.style.display = "block"
      uno.style.display = "none"
    }

  })
</script>