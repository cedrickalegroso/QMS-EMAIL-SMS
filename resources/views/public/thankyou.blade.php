@extends('layout.app')

@section('title')Queue Thank you  @endsection

@section('content')
 
<div  class="container-fluid bg-cpublue text-white queuemainmenuwrapper">

       <div class="container p-5">
           <div class="row">
               <div class="col-md-12 bg-cpuyellow queuemainmenuinnerwrapper p-5">

                   <h1 class="text-center display-2"> THANK YOU! </h1>

                   <br />

                   <h1 class="text-center mt-5"> YOUR TICKET {{ $ticket }} IS NOW BEING PRINTED WE WILL NOTIFY YOU WHEN YOUR TURN IS NEAR. <h1>
                        <br />
                    <p class="lead text-center mt-5"> THIS PAGE WILL AUTOMATICALLY REDIRECT </p> 

               </div>
           </div>
       </div>

    </div>

@endsection