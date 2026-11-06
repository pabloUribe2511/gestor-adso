@extends('layouts.app')
@section('title','Aprendices')
@section('content')
<h1>Aprendices</h1>
<p><a href="{{ route('aprendices.create') }}">+ Nuevo</a></p>

<table border="1" cellpadding="6">
  <tr>
    <th>ID</th><th>Nombre</th><th>Documento</th><th>Correo</th>
  </tr>
  @forelse ($aprendices as $a)
    <tr>
      <td>{{ $a->id }}</td>
      <td>{{ $a->nombre }}</td>
      <td>{{ $a->documento }}</td>
      <td>{{ $a->correo }}</td>
    </tr>
  @empty
    <tr><td colspan="4">No hay aprendices registrados.</td></tr>
  @endforelse
</table>

{{ $aprendices->links() }}
@endsection
