<?php

$informacion = array(
  array(
    "title" => "Búsqueda Continua de la Excelencia",
    "description" => "Perseguimos la Perfección: Nuestro Compromiso con la Calidad"
  ),
  array(
    "title" => "Ética en Nuestros Diagnósticos",
    "description" => "Integridad Profesional: Fundamento de Nuestra Práctica"
  ),
  array(
    "title" => "Formación Continuada",
    "description" => "Crecimiento Profesional Constante: Inversiones en Conocimiento"
  ),
  array(
    "title" => "Trabajo en Equipo y Colaboración",
    "description" => "Sinergia en Acción: Creciendo Juntos, Aportando Ideas"
  ),
  array(
    "title" => "Compromiso con la Sociedad y la Comunidad",
    "description" => "Impacto Local, Compromiso Global: Nuestra Responsabilidad Social"
  ),
  array(
    "title" => "Innovación Tecnológica",
    "description" => "Avanzando en la Vanguardia: Adoptando Tecnologías de Punta"
  ),
  array(
    "title" => "Trato Humano y Personalizado",
    "description" => "Cuidado con Calidez: Atención Centrada en las Personas"
  )
);

?>

@extends('layouts.public')
@section('title',"dentlife")

@section('content')

<section class="h-96 relative">
  <img class="w-full h-full object-cover" src="https://gacetadental.com/wp-content/uploads/2022/07/abrir-clinica-dental-documentacion.jpg" alt="">
  <div class="flex justify-center items-center bg-black/50 absolute inset-0">
    <h1 class="text-white text-7xl font-bold py-12">Sobre nosotros</h1>

  </div>
</section>


<main class="bg-[#f2efe9]">
  <div class="max-w-7xl mx-auto min-h-screen md:px-12 px-6">

    <!-- porque elegir dentlife -->
    <section class="grid md:grid-cols-2 gap-12 py-12">
      <div>
        <h2 class="text-4xl font-bold py-6">¿Por qué elegir Dent Life?</h2>
        <ul class="flex flex-col gap-6">
          @foreach($informacion as $item)
          <li>
            <h4 class="text-xl">{{ $item['title'] }}</h4>
            <p>{{ $item['description'] }}</p>
          </li>
          @endforeach
        </ul>
      </div>
      <div>
        <img src="https://gacetadental.com/wp-content/uploads/2022/07/abrir-clinica-dental-documentacion.jpg" alt="">
      </div>
    </section>


    <!-- mision -->
    <section class="grid md:grid-cols-2 gap-12 py-12">
      <div>
        <img src="https://gacetadental.com/wp-content/uploads/2022/07/abrir-clinica-dental-documentacion.jpg" alt="">
      </div>
      <div class="flex flex-col gap-6">
        <h2 class="text-4xl font-bold">Misión</h2>
        <p>Somos un equipo de profesionales que busca proporcionar a los pacientes una mejor calidad de vida, cubriendo sus necesidades bucodentales a corto, medio y largo plazo brindando una atención dental de calidad con un servicio amigable y personalizado, en un ambiente acogedor y confortable.</p>
        <p>Trabajamos en equipo y colaboramos con otros profesionales de la salud dental, para brindar una atención integral y completa a los pacientes que lo necesiten.</p>
        <p>Promovemos la prevención y el tratamiento temprano de los problemas dentales, fomentando la educación del paciente sobre la importancia de la salud bucal y la prevención de enfermedades dentales.</p>

      </div>
    </section>


    <!-- vision -->
    <section class="grid md:grid-cols-2 gap-12 py-12">
      <div class="flex flex-col gap-6">
        <h2 class="text-4xl font-bold">Visión</h2>
        <p>Nuestra visión es ser reconocidos como un consultorio dental líder en nuestra localidad, gracias a la excelencia en nuestros servicios, nuestro compromiso con la satisfacción del paciente, el trato humano y amable que ofrecemos, así como a la continua actualización y formación de nuestro equipo. Además, buscamos promover la salud oral y educar sobre la importancia de la prevención, ayudando a nuestros pacientes a lograr sonrisas más saludables.
        </p>
      </div>
      <div>
        <img src="https://gacetadental.com/wp-content/uploads/2022/07/abrir-clinica-dental-documentacion.jpg" alt="">
      </div>
    </section>


  </div>
</main>

@endsection