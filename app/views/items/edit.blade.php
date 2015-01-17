
{{Form::model($item, array('method' => 'put', 'route' => array('items.update', $item->id)))}}

{{ Form::text('name', $item->name, array('placeholder' => 'Item Name'))}}<br>
{{ Form::text('description', $item->description, array('placeholder' => 'Item Description'))}}<br>
{{ Form::text('link', $item->link, array('placeholder' => 'Website Link'))}}<br>
{{ Form::text('base_price', $item->base_price, array('placeholder' => 'Item Price'))}}<br>
{{ Form::textarea('notes', $item->notes, array('placeholder' => 'Notes'))}}<br>


{{Form::submit('Edit Item')}}
{{Form::close()}}