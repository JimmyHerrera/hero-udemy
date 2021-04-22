@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Heroe</h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Ingrese un nombre">
        </div>
        <div class="form-group">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" placeholder="Ingrese los puntos de vida">
        </div>
        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" placeholder="Ingrese los puntos de ataque">
        </div>
        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" placeholder="Ingrese los puntos de defensa">
        </div>
        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" placeholder="Ingrese los puntos de suerte">
        </div>
        <div class="form-group">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" placeholder="Ingrese la cantidad de monedas">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection


