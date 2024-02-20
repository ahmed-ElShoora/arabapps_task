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

                    <form action="/form_one" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">frist name</label>
                          <input type="text" class="form-control" value="{{$fname}}" placeholder="Enter first name" name="fname" required>
                          @error('fname')
                          <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">last name</label>
                            <input type="text" class="form-control" value="{{$lname}}" placeholder="Enter last name" name="lname" required>
                            @error('lname')
                                <small class="form-text text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">next</button>
                        {{-- <a type="submit" class="btn btn-danger">back</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
