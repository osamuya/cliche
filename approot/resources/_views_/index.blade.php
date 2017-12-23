@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.layout')

@section('content')
@include('block.jumbotron')

{{ $parameter->hello }}

@endsection

