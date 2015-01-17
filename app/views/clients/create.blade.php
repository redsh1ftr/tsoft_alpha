
{{Form::open(array('route' => 'clients.store', 'method' => 'post'))}}


<select name="contact_id">
  <option id="selected" value=""></option>
 <?php $contacts = Contact::all();?>

@foreach($contacts as $con) 
  <option  value="$con->id">{{$con->fname}} {{$con->lname}}</option>
@endforeach

</select>
{{Form::text('name', '', array('placeholder' => 'Display Name'))}}
{{Form::text('phone', '', array('placeholder' => 'Phone'))}}
{{Form::text('fax', '', array('placeholder' => 'Fax'))}}
{{Form::text('website', '', array('placeholder' => 'Website'))}}
{{Form::text('facebook', '', array('placeholder' => 'Facebook'))}}
{{Form::text('twitter', '', array('placeholder' => 'Twitter'))}}
{{Form::text('bill_street1', '', array('placeholder' => 'Billing Street Address'))}}
{{Form::text('bill_street2', '', array('placeholder' => 'Billing Suite'))}}
{{Form::text('bill_city', '', array('placeholder' => 'Billing City'))}}
{{Form::text('bill_state', '', array('placeholder' => 'Billing State'))}}
{{Form::text('bill_zip', '', array('placeholder' => 'Billing Zip'))}}
{{Form::text('ship_attn', '', array('placeholder' => 'Shipping ATTN TO'))}}
{{Form::text('ship_street1', '', array('placeholder' => 'Shipping Street Address'))}}
{{Form::text('ship_street2', '', array('placeholder' => 'Shipping Suite'))}}
{{Form::text('ship_city', '', array('placeholder' => 'Shipping City'))}}
{{Form::text('ship_state', '', array('placeholder' => 'Shipping State'))}}
{{Form::text('ship_zip', '', array('placeholder' => 'Shipping Zip'))}}<br>

{{Form::submit('Create Client')}}

{{Form::close()}}

