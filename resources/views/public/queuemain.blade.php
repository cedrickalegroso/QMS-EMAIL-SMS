@extends('layout.app')

@section('title')Queue Main View  @endsection

@section('content')



    

    <div class="container-fluid">
        <div class="row">

            <div id="advert" class="col-md-8 bg-cpublue text-white p-3 text-center"> <!-- Some advert space and latest news --> 

                 <video   width="1024"  autoplay loop muted > <!-- Some Video Advert -->

                    <source src="{{ URL::to('media/cpu.mp4') }}" type="video/mp4">
                    <source src="{{ URL::to('media/cpu.ogg') }}" type="video/mp4">
                    
                 </video>
                 
            </div>

            <div class="col-md-4"> <!-- Actual Queue --> 

                <!-- TABLE --> 

                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th scope="col"> TICKET  </th> 
                            <th scope="col"> COUNTER  </th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <h1> P005 </h1> </td>
                            <td> <h1> 18 </h1> </td>
                        </tr>
                         <tr>
                            <td> <h1> P020 </h1> </td>
                            <td> <h1>  16 </h1> </td>
                        </tr>
                         <tr>
                            <td> <h1> P150 </h1> </td>
                            <td> <h1> 19 </h1> </td>
                        </tr>
                         <tr>
                            <td> <h1 class="text-danger"> UNAVAILABLE </h1> </td>
                            <td> <h1> 20 </h1> </td>
                        </tr>
                    </tbody>
                </table>
                    
            </div>

        </div>
    </div>

@endsection

