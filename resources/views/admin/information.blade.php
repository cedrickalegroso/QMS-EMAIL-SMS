@extends('layout.app')

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

                    <div class="text-center">

                            <h1 class="text-center display-4"> Information  </h1>

                            <h1> You are serving </h1>
       
                            <h1> {{ $ticket }} </h1>  
       
                           <a onclick="playSound('/media/notif');" href="{{ route('nextTicket', ['service' => 'information', 'token' => $token ])}} " > Next </a>

                           <button >Play</button>  
    

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
