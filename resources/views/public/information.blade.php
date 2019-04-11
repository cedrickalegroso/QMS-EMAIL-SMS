@extends('layout.app')

@section('title') Information @endsection

@section('content')

<div class="container-fluid bg-cpublue  queuemainmenuwrapper p-5">

    <div class="container ">
        <div class="row">
            <div class="col-md-4 bg-cpuyellow text-white queuemainmenuinnerwrapper">
              <h1 class="mt-5">  Current Ticket  </h1> 
              <h1 class="ticketmenu" >   {{ $currentTicket }} </h1>
               
              <h1 class="mt-5">  Your Ticket  </h1> 
              <h1 class="ticketmenu" >   {{ $ticket }} </h1> 
            </div>
            <div class="col-md-8 p-5 bg-white text-light text-center queuemainmenuinnerwrapper">
                   
                   <h4 class="text-left text-dark "> Notify me when it's my turn </h4>
                   
                  
                   <form class="mt-2 text-center" method="POST" action="{{ route('printTicket', ['token' => $token ])}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Name" name="name" class="form-control ">
                    </div>
                    <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control ">
                        </div>
                        <div class="form-group">
                                
                                <div class="input-group mb-2 mr-sm-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text ">+639</div>
                                  </div>
                                  <input type="text" class="form-control "  placeholder="Phone Number">
                                </div>
                            </div>
                   
                   <br />
                   <hr>
                  
                
                  <a  href="{{ route('home') }}" class="btn btn-danger btn-lg  menubutton mt-5 m-2"> Cancel Ticket </a>
                  <button class="btn btn-success btn-lg  menubutton mt-5  m-2"> Print Ticket </button>
                </form>

            </div>
        </div>
    </div>

</div>

@endsection