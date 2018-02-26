@extends('layouts.app')

@section('content')

@component('components.slide', ['lista'=>$slides])
@endcomponent

<div class="container">
@component('components.lista_cartao', ['lista'=>$carros, 'tamanho'=>'4'])
@endcomponent
  
</div>
@endsection
