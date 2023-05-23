@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="float-right my-2">
                                <a class="btn btn-success" href="{{ route('coffee.create') }}"> Input Coffee</a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th width="180px">Image</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($coffees as $Coffee)
                        <tr>
                            <td>{{ $Coffee->name }}</td>
                            <td>{{ $Coffee->price }}</td>
                            <td>{{ $Coffee->description }}</td>
                            <td>{{ $Coffee->image }}</td>
                            <td>
                            <form action="{{ route('coffee.destroy',$Coffee->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('coffee.show',$Coffee->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('coffee.edit',$Coffee->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
