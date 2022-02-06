@extends('layouts.app')

@section('title', 'ThankYou - ' . $title)

@section('meta')
<Meta name=”robots” content=”index,nofollow”/>
@endsection

@section('content')
@include('components.breadcrumb')
<div class="container mx-auto">
    <div class="py-6"></div>
    <div class="text-center mb-4">
        <h1>Gracias por tu mensaje, en breve nos comunicamos contigo.</h1>
        <br>
        <a class="bg-purple-900 my-4 px-6 py-2 uppercase w-full text-white shadow" href="{{ route('welcome') }}">Volver</a>
    </div>
</div>
@endsection