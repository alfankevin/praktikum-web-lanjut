@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Coffee
            </div>
            <div class="card-body">
            @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ route('coffee.update', $Coffee->id) }}" id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $Coffee->name }}" aria-describedby="name">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="price" name="price" class="form-control" id="price" value="{{ $Coffee->price }}" aria-describedby="price">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" id="description" value="{{ $Coffee->description }}" aria-describedby="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
@endsection