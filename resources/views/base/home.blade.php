@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> --}}
        <my-button type="submit" text="button"></my-button>
        <h1>Welcome to your training app</h1>
        <h2>Sign in to continue</h2>
    </div>
</div>
@endsection
