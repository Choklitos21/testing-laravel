@extends('layouts.app')

@section('title','Crear')

@section('content')
    <form method="POST" action="{{ route('users.store') }}" class="bg-white p-6 rounded shadow max-w-md mx-auto">
        @csrf

        <input name="name" placeholder="Nombre" class="w-full border p-2 mb-2">
        <input name="email" placeholder="Email" class="w-full border p-2 mb-2">
        <input name="password" type="password" placeholder="Password" class="w-full border p-2 mb-2">

        <button class="bg-blue-600 text-white px-4 py-2">Guardar</button>
    </form>
@endsection
