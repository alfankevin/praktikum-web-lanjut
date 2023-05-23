@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Coffee
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id: </b>{{$Coffee->id}}</li>
                    <li class="list-group-item"><b>Name: </b>{{$Coffee->name}}</li>
                    <li class="list-group-item"><b>Price: </b>{{$Coffee->price}}</li>
                    <li class="list-group-item"><b>Description: </b>{{$Coffee->description}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('home') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection