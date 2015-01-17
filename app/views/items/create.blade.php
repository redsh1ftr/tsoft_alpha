C:\xampp\htdocs\tsoft_alpha\app/views/items/create.blade.php

{{ Form::open(array('route' => 'items.store', 'method' => 'post'))}}


{{ Form::text('name', '', array('placeholder' => 'Item Name'))}}<br>
{{ Form::text('description', '', array('placeholder' => 'Item Description'))}}<br>
{{ Form::text('link', '', array('placeholder' => 'Website Link'))}}<br>
{{ Form::text('base_price', '', array('placeholder' => 'Item Price'))}}<br>
{{ Form::textarea('notes', '', array('placeholder' => 'Notes'))}}<br>


{{Form::submit('Create Item')}}
{{Form::close()}}