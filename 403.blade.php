@extends('errors::illustrated-layout')

@section('code', '403')
@section('title', __('Proibido'))

@section('image')
<div style="background-image: url('/svg/403.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Desculpe, você está proibido de acessar esta página.'))
