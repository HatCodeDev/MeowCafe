@extends('layouts.app')

@section('title', 'Meow Café Bistro - Tu cafetería con gatos en Puebla')
@section('description', 'Bienvenido a Meow Café Bistro. Disfruta de nuestro delicioso menú, conoce a nuestros gatitos residentes y encuentra a tu compañero ideal para adoptar. ¡Te esperamos!')

@section('content')
    
    @include('home.sections._hero')
    @include('home.sections._announcements')

    @include('home.sections._menu')
    @include('home.sections._ubication')


@endsection