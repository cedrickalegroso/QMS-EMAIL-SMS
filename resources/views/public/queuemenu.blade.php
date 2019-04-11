@extends('layout.app')

@section('title')Queue Menu  @endsection

@section('content')
 
  <div  class="container-fluid bg-cpublue text-white queuemainmenuwrapper">

         <h1 class="text-center p-2 text-cpuyellow "> Good Day Centralian! </h1> 

      <div   class="row p-2">

          <div class="col-md-6">
             
            <a href="{{ route('newticket',  ['service' => 'Information']) }}">
             <div class="container menuoption ">
                 <div class="row">
                     <div class="col-md-4 bg-cpuyellow menuo-logo-wrap">
                     <img src="{{ URL::to('media/info.png')}}" class="menu-option-logo" >
                     </div>
                     <div class="col-md-8 bg-white text-cpuyellow">
                            <h1> INFORMATION </h1>
                        </div>
                 </div>
                </a>


             </div>
             
             <a href="{{ route('newticket',  ['service' => 'Payments']) }}">
             <div class="container menuoption ">
                    <div class="row">
                        <div class="col-md-4 bg-cpuyellow menuo-logo-wrap">
                                <img src="{{ URL::to('media/money.png')}}" class="menu-option-logo" >
                        </div>
                        <div class="col-md-8 bg-white text-cpuyellow">
                               <h1> BILLS AND PAYMENTS</h1>
                           </div>
                    </div>
                </a>
                </div>
           


          </div>

          <div class="col-md-6">
                
            <a href="{{ route('newticket',  ['service' => 'Online']) }}">
                <div class="container menuoption ">
                        <div class="row">
                            <div class="col-md-4 bg-cpuyellow menuo-logo-wrap">
                                    <img src="{{ URL::to('media/online.png')}}" class="menu-option-logo" >
                            </div>
                            <div class="col-md-8 bg-white text-cpuyellow">
                                   <h1> ONLINE PAYMENT VERIFY </h1>
                               </div>
                        </div>
                    </a>
                    </div>
       
       
                    <div class="container menuoption ">
                           <div class="row">
                               <div class="col-md-4 bg-cpuyellow menuo-logo-wrap">
                                    <img src="{{ URL::to('media/others.png')}}" class="menu-option-logo" >
                               </div>
                               <div class="col-md-8 bg-white text-cpuyellow">
                                      <h1> OTHERS </h1>
                                  </div>
                           </div>
                       </div>


            </div>

      </div>
  </div>

@endsection