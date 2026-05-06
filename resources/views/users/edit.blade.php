@extends('layouts.app')

@section('content')

    <a href="{{ route('users.create') }}" class="bg-green-500 text-white px-4 py-2">Crear</a>

    <table class="w-full mt-4 bg-white">
        @foreach($users as $user)
            <tr class="border">
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit',$user->id) }}">Editar</a>

                    <form method="POST" action="{{ route('users.destroy',$user->id) }}">
                        @csrf
                        @method('DELETE')
                        <button>Eliminar</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>

@endsection
