@extends('errors::illustrated-layout')

@section('code', '503')
@section('title', __('Serviço Indisponível'))

@section('image')
<div style="background-image: url('/svg/503.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __($exception->getMessage() ?: 'Desculpe, estamos fazendo uma manutenção. Por favor, tente novamente em breve.'))
