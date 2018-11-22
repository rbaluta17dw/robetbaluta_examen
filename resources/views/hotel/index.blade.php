@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Hoteles de 1ª</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Direccion</th>
    <th>Categoria</th>
  </tr>
  @if(isset($hoteles))
  @foreach($hoteles as $hotel)
  @if($hotel->completo == 1)
  <tr style="color: red;">
  @else
  <tr style="color: green;">
  @endif
  <td>{{$hotel->id}}</td>
  <td>{{$hotel->nombre}}</td>
  <td>{{$hotel->direccion}}</td>
  <td>{{$hotel->categoria}}</td>
  </tr>
  @endforeach
  @endif
</table>

@endsection
