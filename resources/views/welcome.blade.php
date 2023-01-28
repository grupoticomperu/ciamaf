@extends('layout')

@section('title')
{{ $configurations->metatitle }}
@stop

@section('meta-title')
{{ $configurations->metatitle }}
@stop

@section('meta-description')
{{ $configurations->metadescription }}
@stop

@section('keywords')
{{ $configurations->keywords }}
@stop



@section('contenido')

	@include('parts.famaicslider')
    {{-- @include('parts.sliderd') --}}
    @include('parts.famaicabout')
    @include('parts.famaiccounter')
    @include('parts.famaicsolidsolutions')
    @include('parts.famaiccontact')
    @include('parts.famaicgallery')
    {{-- @include('parts.famaicteam')
    @include('parts.famaicblog') --}}

@stop

