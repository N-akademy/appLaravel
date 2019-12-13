@extends('layouts.templates')

@section('content')




<h1>Films</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Sexe</th>
        <th>Age</th>
        <th>Poids</th>
        <th>Taille</th>
        <th>Races</th>
        @if(Auth::check())
            @if(Auth::user()->role=='administator')
            <th>Modifier</th>
            <th>Supprimer</th>
            @endif
        @endif
    </tr>
    @foreach ($animalworld as $animal )
        <tr>
            <th class="id">{{ $animal->id }}</th>
            <td>{{ $animal->name }}</td>
            <td>{{ $animal->gender }}</td>
            <td>{{ $animal->age }}</td>
            <td>{{ $animal->weight }}</td>
            <td>{{ $animal->size}}</td>
            <td>{{ $animal->breed->name }}</td>
            @if(Auth::check())
                @if(Auth::user()->role=='administator')
                    <td class="form">
                    <form action="{{route('editAnimal',$animal->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="animal_id" value"{{$animal->id}}">
                        <button class="td" type="submit">Modifier</button>
                    </form>
                    </td>
                    <td class="form">
                    <form action="{{route('deleteAnimal',$animal->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="animal_id" value"{{$animal->id}}">
                        <button class="td" type="submit">Supprimer</button>
                    </form>
                    </td>
                @endif
            @endif
        </tr>
    @endforeach
</table>
@endsection
