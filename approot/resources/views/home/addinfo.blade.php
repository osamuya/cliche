@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>Dashboard</h3>
            You are logged in!
        </div>
        
        <div class="col-sm-4">
            <h4>Index</h4>
            <div class="panel panel-default panel-basic">
                <div class="panel-heading">Member Index</div>
                <div class="panel-body">
                    <ul>
                        <li><a href="/home/add/information">Add My Informations</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection