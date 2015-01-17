@extends('layouts.master')

@section('style')

<style>
	.main{
		position: relative;
		min-height: 900px;
		height: 100%;
		overflow: hidden;
		width: 100%;
	}
    .left{
      position: relative;
      float: left;
      width: 49%;
      height: 100%;
    }

    .right{
      position: relative;
      float: right;
      width: 49%;
      height: 200%;
  
    }




</style>

@stop

@section('right_menu')

   <li>{{link_to_route('invoices.create', 'New Invoice')}}</a></li>

@stop



@section('content')

<div class="main">
<div class="left">
@foreach($invoices as $invoice)


  <div class="row">
  	
      <div class="small-8 columns">
  			<a href="//localhost/tsoft_alpha/public/invoices/{{$invoice->id}}" target="iframe_a">
  			{{$invoice->invoice_number}} - {{$invoice->clientName($invoice->client_id)}}	</a>
      </div>

      <div class="small-4 columns">
        
         <button class="btn btn-inverse">{{link_to_route('invoicePDF', 'PDF', $invoice->id)}}</button>

         
      </div>
  </div>
	
@endforeach
</div>


<div class="right">
<iframe style="visibility:hidden;" onload="this.style.visibility = 'visible';" height="700px" width="100%" name="iframe_a">




</iframe>
</div>
</div>
@stop