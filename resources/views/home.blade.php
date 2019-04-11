@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <p class="text-center"> Chooser a service to manage </p>

                     <a href="{{ route('serviceBackend', ['service' => 'information'])}} " > Information </a>
                     |
                    <a href="{{ route('serviceBackend', ['service' => 'payments'])}} " > Bills and Payments </a>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
