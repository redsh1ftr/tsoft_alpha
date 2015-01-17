@extends('layouts.master')


@section('style')

<style>

    .left{
      position: relative;
      float: left;
      width: 49%;
      height: 100%;
      max-height: 100%;
      overflow-y:scroll;
    }

    .right{
      position: relative;
      float: right;
      width: 49%;
      height: 100%;
      max-height: 100%;
      overflow-y:scroll;
    }

</style>

@stop

@section('content')
<div class="left">
@foreach($items as $item)

{{link_to_route('items.show', $item->name, $item->id)}} {{$item->price}}<br><br>

@endforeach
</div>

<div class="right">
	{{View::make('items.create')}}
</div>

@stop