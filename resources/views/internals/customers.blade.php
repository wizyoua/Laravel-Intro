@extends('layout')

@section('title', 'Customer List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Customer List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="customers" method="POST" >
                <label for="name">Name:</label>
                <div class="form-group ">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>
                <label for="email">email:</label>
                <div class="form-group pb-2">
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <div>{{ $errors->first('email') }}</div>
                </div>

                <button type="submit" class="btn btn-primary">Add Customer</button>

                @csrf
            </form>
        </div>
    </div>



    <hr>
    <div class="row">
        <div class="col-12">
            <ul>
                @foreach ($customers as $customer)
                    <li>{{$customer->name}}  <span class="text-muted">{{$customer->email}}</span></li>
                @endforeach
                </ul>
        </div>
    </div>

@endsection
