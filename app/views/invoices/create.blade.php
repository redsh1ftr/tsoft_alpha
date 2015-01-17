@extends('layouts.master')

@section('style')

<style>

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


    <dl class="tabs" data-tab>
  <dd class="active"><a href="#panel1">Bill To Client</a></dd>
  <dd><a href="#panel2">Bill to Contact</a></dd>
</dl>
<div class="tabs-content">
  <div class="content active" id="panel1">
    {{Form::open(array('route' => 'invoices.store', 'method' => 'post'))}}

{{Form::label('billto', 'Bill To Client: ')}}
<select name="client_id">
  @foreach($clients as $client)
    <option value="{{$client->id}}">{{$client->name}}
  @endforeach
</select>
<br>

{{Form::hidden('po_count', '1')}}

<?php $invnum = DB::table('defaults')->where('id', 1)->pluck('invoice_number');?>

{{Form::hidden('invoice_number', $invnum)}}


{{Form::submit('Create Invoice for Client')}}

{{Form::close()}} 
  </div>
  <div class="content" id="panel2">
   {{Form::open(array('route' => 'invoices.store', 'method' => 'post'))}}

{{Form::label('billto', 'Bill To Contact: ')}}
<select name="client_id">
  @foreach($contacts as $contact)
    <option value="{{$contact->id}}">{{$contact->fname}} {{$contact->lname}}
  @endforeach
</select>
<br>

{{Form::hidden('po_count', '1')}}

<?php $invnum = DB::table('defaults')->where('id', 1)->pluck('invoice_number');?>

{{Form::hidden('invoice_number', $invnum)}}


{{Form::submit('Create Invoice for Contact')}}

{{Form::close()}}
  </div>
</div>





</div>


<div class="right">
  <dl class="tabs" data-tab>
  <dd class="active"><a href="#panel3">Create Client</a></dd>
  <dd><a href="#panel4">Create Contact</a></dd>
</dl>
<div class="tabs-content">
  <div class="content active" id="panel3">
    {{View::make('clients.create')}} 
  </div>
  <div class="content" id="panel4">
   {{View::make('contacts.create')}} 
  </div>
</div>





 
</div>
</div>
@stop