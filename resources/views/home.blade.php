@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3> <strong>{{ __('My Profile') }}</strong> </h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>
                        <strong>Name :</strong> {{Auth()->user()->name}} <br>
                        <strong>Username :</strong> {{Auth()->user()->username}} <br>
                        <strong>E-mail :</strong> {{Auth()->user()->email}}
                    </p>
                    <p>
                        <a href="{{route('index.admin')}}" class="btn btn-primary">Servic Management</a>
                        <a href="{{ url('/') }}" class="btn btn-success">Home</a>
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
