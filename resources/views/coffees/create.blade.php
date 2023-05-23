@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Add Coffee
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
                    <form method="post" action="{{ route('coffee.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" name="name" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="price" name="price" class="form-control" id="price" aria-describedby="price">
                        </div>
                        <div class="form-group">
                            <label for="descriptio">Description</label>
                            <input type="description" name="description" class="form-control" id="description" aria-describedby="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
