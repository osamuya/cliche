@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.app')

@section('content')

foobar
{{ $parameter->hello }}

@endsection

