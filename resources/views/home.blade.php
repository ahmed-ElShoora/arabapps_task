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

                    <center>
                        @if(Session::has('notification'))
    <div class="alert alert-info">
        {{ Session::get('notification') }}
    </div>
@endif
                        @if ($count == 0 || $step == '1' || $step == '2' || $step == '3')
                            <a 
                            @if ($count == 0)
                                href="/form_one"
                            @elseif($step == '1')
                                href="/form_two"
                            @elseif($step == '2')
                                href="/form_three"    
                            @elseif($step == '3')
                                href="/sure_page" 
                            @endif
                            class="btn btn-success" >انشاء او متابعه الحاله السابقه</a>
                        @else
                            <p class="btn btn-danger" >تم الانشاء من قبل</p>
                        @endif
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
