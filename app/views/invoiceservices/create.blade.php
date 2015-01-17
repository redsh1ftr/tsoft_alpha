{{Form::open(array('route' => 'invoice_services.store', 'method' => 'post'))}}

{{Form::text('service', '', array('placeholder' => 'Service'))}}
{{Form::text('description', '', array('placeholder' => 'Description'))}}


<select name="quantity">
<option value="1">Quantity</option>
@foreach(range(1, 10, 1) as $numbers)
<option value="{{$numbers}}">{{$numbers}}</option>
@endforeach
</select>

{{Form::text('price', '', array('placeholder' => 'Price'))}}
{{Form::hidden('invoice_id', $invoice_id)}}
{{Form::submit('Add Line')}}

{{Form::close()}}