@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
@include('block.jumbotron')

{{ $parameter->hello }}

@endsection

