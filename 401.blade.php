@extends('errors::illustrated-layout')

@section('code', '401')
@section('title', __('Não Autorizado'))

@section('image')
<div style="background-image: url('/svg/403.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Desculpe, você não está autorizado a acessar esta página.'))
