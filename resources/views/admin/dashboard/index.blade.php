@extends('admin.layout')

@section('content')
          <div class="card card-default" >
                <div class="row">
                    <div class="card-body">
                         <h5 class="card-title">Order</h5><br>
                         <div clas="lingkaran" style='background-color:white; width :80px; height:80px; margin:auto; padding:17px; border-radius:100%; text-align:center; border: 10px solid green;'>
                                {{$orders}}                                    
                         </div>
                    </div>
                    <div class="card-body">
                         <h5 class="card-title">Payment</h5><br>
                         <div clas="lingkaran" style='background-color:white; width :80px; height:80px; margin:auto; padding:17px; border-radius:100%;border: 10px solid green; text-align:center;'>
                              {{$payments}}                                        
                         </div>
                    </div>
                    <div class="card-body">
                         <h5 class="card-title">Shipment</h5><br>
                         <div clas="lingkaran" style='background-color:white; width :80px; height:80px; margin:auto; padding:17px; border-radius:100%;border: 10px solid green;text-align:center;'>
                              {{$shipments}}                                       
                         </div>
                    </div>
                    
                    
               </div>
          </div>                            
              
        


@stop