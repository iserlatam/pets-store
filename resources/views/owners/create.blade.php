@extends('layouts.petsStore')

@section('title', 'Home')

@section('content')
    <div class="w-full py-5 flex justify-between items-center">
        <h1 class="text-2xl">
            Crear nueva mascota
        </h1>
        <a href={{ route('pets') }} class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Cancelar
        </a>
    </div>
@endsection
