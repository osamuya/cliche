@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.app')

@section('content')
{{ $parameter->hello }}
@endsection

