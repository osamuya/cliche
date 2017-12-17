@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.app')

@section('content')
@include('block.jumbotron')

{{ $parameter->hello }}

@endsection

