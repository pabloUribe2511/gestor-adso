@extends('layouts.app')
@section('title','Nuevo Aprendiz')
@section('content')
<h1>Nuevo Aprendiz</h1>

@if ($errors->any())
  <ul style="color:red">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

<form action="{{ route('aprendices.store') }}" method="POST">
  @csrf
  <label>Nombre <input name="nombre" value="{{ old('nombre') }}" required></label><br>
  <label>Documento <input name="documento" value="{{ old('documento') }}" required></label><br>
  <label>Correo <input type="email" name="correo" value="{{ old('correo') }}" required></label><br>
  <label>Ficha (opcional) <input type="number" name="ficha_id" value="{{ old('ficha_id') }}"></label><br>
  <button>Guardar</button>
</form>
@endsection
