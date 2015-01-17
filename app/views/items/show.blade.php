@extends('layouts.master')


@section('style')

<style>
	.main{
		position: relative;
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


@stop



@section('content')

<div class="main">

	<div class="left">

		<?php if($item->base_price < '.1'){$pricetag = number_format(0, 2);}else{$pricetag = number_format($item->base_price, 2);}?>
		<a href="{{$item->link}}" target="_blank">{{$item->name}} - ${{$pricetag}}</a>
		<br><br>

		<h5>Description</h5>
		{{$item->description}}<br>
		<br>

	</div>

	<div class="right">

{{Form::model($item, array('method' => 'put', 'route' => array('items.update', $item->id)))}}

{{ Form::text('name', $item->name, array('placeholder' => 'Item Name'))}}<br>
{{ Form::text('description', $item->description, array('placeholder' => 'Item Description'))}}<br>
{{ Form::text('link', $item->link, array('placeholder' => 'Website Link'))}}<br>
{{ Form::text('base_price', $item->base_price, array('placeholder' => 'Item Price'))}}<br>
{{ Form::textarea('notes', $item->notes, array('placeholder' => 'Notes', 'style' => 'height:200px'))}}<br>


{{Form::submit('Edit Item')}}
{{Form::close()}}
	</div>

</div>
@stop

