@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Sure ?</h1>
                        <p>first name : {{$data->first_name}}</p><br>
                        <p>last name : {{$data->last_name}}</p><br>
                        <p>email : {{$data->email}}</p><br>
                        <p>passport id : {{$data->number_passport}}</p><br>
                        <p>status : {{$data->status}}</p><br>
                        <p>age : {{$data->age}}</p><br>
                    <br>
                    <a href="/end" class="btn btn-success">Send</a>
                    <a href="/form_three" class="btn btn-danger">back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
