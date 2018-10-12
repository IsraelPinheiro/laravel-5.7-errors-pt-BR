@extends('errors::illustrated-layout')

@section('code', '429')
@section('title', __('Muitas Requisições'))

@section('image')
<div style="background-image: url('/svg/403.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Desculpe, você está fazendo muitas requisições para nossos servidores.'))
