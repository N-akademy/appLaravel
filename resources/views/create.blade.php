@extends('layouts.templates')

@section('content')




<h1>Page de création de films</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form  action="/storeMovie" method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name" placeholder="Nom" />

    <label for="gender">Sexe<span class="required">*</span></label>
    <input type="text" name="gender" placeholder="Sexe" />


    <label for="age">Age<span class="required">*</span></label>
    <input type="number" name="age" placeholder="Age" />


    <label for="weight">Poids<span class="required">*</span></label>
    <input type="number" name="weight" placeholder="Poids" />

    <label for="size">Taille<span class="required">*</span></label>
    <input type="number" name="size" placeholder="Taille" />

    <label for="breed">Races<span class="required">*</span></label>
    <select  name="breed_id"/>
        @foreach (breed as breed)
            <option value="{{breed->id}}">{{breed->name}}</option>
            <option value="{{breed->id}}">{{breed->classification}}</option>
            <option value="{{breed->id}}">{{breed->lifeExpectancy}}</option>
        @endforeach
    </select>
        <br>


    <input type="submit" value="Ajouter" />


    </form>




@endsection
