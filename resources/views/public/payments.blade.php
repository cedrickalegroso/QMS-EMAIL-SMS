@extends('layout.app')

@section('title')
  Bills and Payments  
@endsection

@section('content')




    
  <div class="container-fluid bg-cpublue queuemainmenuwrapper p-5">

    <div class="container bg-cpuyellow text-white queuemainmenuinnerwrapper">
        <div class="row">
            <div class="col-md-4">
               <h1 class="mt-5" > Current Ticket </h1>
               <h1 class="ticketmenu" >   {{ $currentTicket }} </h1> 

               <h1 class="mt-5" > Your Ticket </h1>
                
 
              <h1 class="ticketmenu" >   {{ $ticket }} </h1> 
              
            </div>
            <div class="col-md-8 bg-white  queuemainmenuinnerwrapper text-dark p-5">
                      
                   <h1 class="display-4"> Notify me </h1>

            <form class="mt-2 text-center" method="POST" action="{{ route('printTicket', ['token' => $token ])}}">
              @csrf
                      <div class="form-group">
                          <input type="text" class="form-control" name="name" placeholder="Name" >
                      </div>

                      <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" >
                        </div>

                        <div class="form-group">
                                
                                <div class="input-group mb-2 mr-sm-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text ">+639</div>
                                  </div>
                                  <input type="text" class="form-control " name="phonenumber" placeholder="Phone Number">
                                </div>
                            </div>

                            <hr>
  
                             <div class="form-group mt-5">
                                    <a href="{{ route('home')}}" class="btn btn-danger btn-lg menubutton"> Cancel Ticket </a>
                                    <button type="submit" class="btn btn-success btn-lg menubutton"> Print Ticket </button>
                             </div>
                        
                       
                   </form>
                 
                   
            </div> 
        </div>
    </div>

  </div>


@endsection