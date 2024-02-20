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

                    <form action="/form_three" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">status</label>
                          <input type="text" required name="status" value="{{$status}}" class="form-control" placeholder="Enter status">
                          @error('status')
                          <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">age</label>
                            <input type="number" required name="age" value="{{$age}}" class="form-control" placeholder="Enter age">
                            @error('age')
                          <small class="form-text text-muted">{{ $message }}</small>
                        @enderror
                          </div>
                          <br>
                        <button type="submit" class="btn btn-success">next</button>
                        <a href="/form_two" class="btn btn-danger">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
