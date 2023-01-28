@extends('layout')

@section('title')
{{ $subcategory->title }}
@stop

@section('meta-title')
{{ $subcategory->title }}
@stop

@section('meta-description')
{{ $subcategory->description }}
@stop

@section('keywords')
{{ $subcategory->keywords }}
@stop



@section('contenido')

      <!-- Breadcrumb default-->


      @livewire('category-filter', ['subcategory' => $subcategory])

      <!-- Grid view-->



@stop
