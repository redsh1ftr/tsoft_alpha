C:\xampp\htdocs\tsoft_alpha\app/views/contacts/create.blade.php

{{Form::open(array('route' => 'contacts.store', 'method' => 'post'))}}

{{Form::text('name', '', array('placeholder' => 'Display Name'))}}<br>

{{Form::text('fname', '', array('placeholder' => 'First Name'))}}<br>
{{Form::text('lname', '', array('placeholder' => 'Last Name'))}}<br>
{{Form::text('phone', '', array('placeholder' => 'Phone Number'))}}<br>
{{Form::text('email', '', array('placeholder' => 'Email'))}}<br>
{{Form::text('facebook', '', array('placeholder' => 'Facebook'))}}<br>
{{Form::text('linkedin', '', array('placeholder' => 'LinkedIn'))}}<br>
{{Form::text('twitter', '', array('placeholder' => 'Twitter'))}}<br>
{{Form::text('skype', '', array('placeholder' => 'Skype'))}}<br>
{{Form::text('street1', '', array('placeholder' => 'Street Address'))}}<br>
{{Form::text('street2', '', array('placeholder' => 'Suite'))}}<br>
{{Form::text('city', '', array('placeholder' => 'City'))}}<br>
{{Form::text('state', '', array('placeholder' => 'State'))}}<br>
{{Form::text('zip', '', array('placeholder' => 'Zip'))}}<br>

{{Form::submit('Create Contact')}}


	{{Form::close()}}