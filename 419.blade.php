@extends('errors::illustrated-layout')

@section('code', '419')
@section('title', __('Página Expirada'))

@section('image')
<div style="background-image: url('/svg/403.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Desculpe, sua sessão expirou. Por favor atualize e tente novamente.'))
