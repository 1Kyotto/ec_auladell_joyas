@extends('template.master')

@section('contenido')
<div class="main col-span-6 bg-red-600">
	MAIN
	<div class="">
		<img src="{{ asset('images/amazed-black-guy.jpg') }}" alt="Imagen" width="400" height="200" class="mx-auto block">
	</div>
</div>

<div class="call-to-action col-span-6 bg-orange-900 grid grid-cols-3">
	<div class="col-span-1 col-start-2 grid grid-rows-3">
		<h2 class="row-span-1 text-3xl">
			Call-To-Action
		</h2>
		<div class="row-span-1">
			<p class="text-sm">
				para aprender
			</p>
		</div>
		<div class="row-span-1">
			<button>Si</button>
		</div>
	</div>
</div>

<div class="categorias col-span-6 bg-amber-600 grid grid-row-1">
	<div class="row-span-1 grid grid-cols-8">
		<div class="col-span-2">0</div>
		<div class="col-span-1">Collares</div>
		<div class="col-span-1">Anillos</div>
		<div class="col-span-1">Aros</div>
		<div class="col-span-1">Brazaletes</div>
		<div class="col-span-2">0</div>
	  </div>
</div>

<div class="recomendaciones col-span-6 bg-lime-900">
	RECOMENDACIONES
</div>
@endsection