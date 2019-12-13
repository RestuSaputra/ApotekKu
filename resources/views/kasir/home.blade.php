@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kasir Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    You are logged in! Welcome {{ auth()->user()->username() }}
                    @endif
                        <p>Hallo, {{Session::get('username')}}. Apakabar?</p>
                        <h2>* Email kamu : {{Session::get('email')}}</h2>
                        <h2>* Status Login : {{Session::get('login')}}</h2>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection