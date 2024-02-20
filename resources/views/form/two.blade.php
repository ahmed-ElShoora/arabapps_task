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

                    <form action="/form_two" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">email</label>
                          <input required type="email" name="email" value="{{$email}}" class="form-control" placeholder="Enter email">
                          @error('email')
                          <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">passport id 16 number</label>
                            <input required type="number" value="{{$passport_id}}" minlength="16" maxlength="16" name="passport_id" class="form-control" placeholder="Enter your passport id">
                            @error('passport_id')
                          <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                          </div>
                          <br>
                        <button type="submit" class="btn btn-success">next</button>
                        <a href="/form_one" class="btn btn-danger">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
