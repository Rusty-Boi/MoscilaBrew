@extends('layouts.master')
@section('title', "testing")

@section('content')
    @foreach ($hobby as $item)
        <p>{{ $item }}</p>
    @endforeach
@endsection

@section('css')
    <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css">
@endsection

@section('js')
    <script src={{asset('js/index.js')}}></script>
@endsection