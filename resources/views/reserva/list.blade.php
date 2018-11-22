@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Reserva</h2>
  @if(isset($cliente))
  <h3>Cliente: {{$cliente->nombre}} {{$cliente->apellido}}</h3>
  <h3>NIF: {{$cliente->nif}} </h3>

  <h3>Ha realizado las siguientes reservas:</h3>
  @if(isset($cliente->hotels))
  <table>
    <tr>
      <th>Hotel</th>
      <th>Fecha</th>
      <th>Numero de habitaciones</th>
    </tr>
    @foreach($cliente->hotels as $hotel)
    <tr>
      <td>{{$hotel->nombre}}</td>
      <td>{{$hotel->pivot->fecha}}</td>
      <td>{{$hotel->pivot->numhabitaciones}}</td>
    </tr>
    @endforeach
    

  </table>
  @endif
  @else
  <h2>INTRODUZCA ID DE CLIENTE EN LA RUTA</h2>
  @endif
@endsection
