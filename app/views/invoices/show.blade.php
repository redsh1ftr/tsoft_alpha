<style>

    body {
      margin:0;
      width: 100%;
      font-family:'Lato', sans-serif;
      background-color: #ffffff; 
      color: #000000;
    }

    .mainbody{
      width: 750px;
      height: 917px;
      border-radius:30px;
      background-color: #ffffff;
      color: #000000;
    }


    .logo{
      position: absolute;
      max-width: 300px;
    }

    .company_address{
      background-color: transparent;
      position: absolute;
      font-size: 11px;
      margin-left: 350px;
      margin-top:60px;
      width:200px;
      color:#000000;
 
    }

    .billto_address{
      position: relative;
      margin-top: 200px;
      color:#000000;
      background-color:#ffffff;
    }

    .items{
      position: relative;
      color:#000000;
      background-color:#ffffff;
    }

    .document_type{
      position: absolute;
      width: 20%;
      text-align: right;
      margin-left: 80%;
      background-color:#ffffff;
      font-size: 12px;
    }

    .thankyou{
      position: relative;
      text-align: center;
      font-size: 11px;
    }


    .blackouttext{
      color:#000000;
    }

    .whiteoutext{
      color:#ffffff;
    }


    a, a:visited {
      text-decoration:none;
    }
</style>

 <div class="row">
  <div class="logo"><img src="//localhost/tsoft_alpha/public/images/logo.jpg"></div>
  <div class="document_type">
    <h2>INVOICE</h2>
    <table width="100%">
      <tr><td>Date:</td><td>{{Carbon::parse($invoice->created_at)->format('m/d/Y')}}</td><tr>
      <td>Inoice #:</td><td>{{Carbon::parse($invoice->created_at)->format('my')}}-10131</td><tr>
    </table>

  </div>
  <div class="company_address">
    <div class="row">
      <div class="small-3 columns">20407 Glenmore<br>Redford MI, 48240</div>
      <div class="small-3 columns">(313) 515-5094<br>billing@tavaresoft.com</div>
      
    </div>
  </div>
<br>
  <div class="billto_address">


  <div class="row">
    <div class="small-2 columns">Bill to:<br>
      @foreach($invoice->clientInfo($invoice->client_id) as $cli)

      {{$cli->bill_street1}} {{$cli->bill_street2}}
      <br>{{$cli->bill_city}} {{Str::upper($cli->bill_state)}}, {{$cli->bill_zip}} 
      @endforeach
    </div>
  </div>
<br>
    <table width="100%" border="2px solid"><tr>
      <th style="background-color:#000000;color:#ffffff;width:50%">
        Item/Description</th>
      <th style="background-color:#000000;color:#ffffff;width:20%">
        Quantity</th>
      <th style="background-color:#000000;color:#ffffff;width:20%;">
        Amount</th><tr>

        @foreach($invoice->getServices($invoice->id) as $lines)


{{Form::model($lines, array('method' => 'put', 'route' => array('invoice_services.update', $lines->id)))}}
       
        
        <td><b><u>{{Form::text('service', $lines->service)}}</b></u><i>{{Form::text('description', $lines->description)}}</i></td>
        <td align="center">{{Form::text('quantity', $lines->quantity)}}</td><td align="right">{{Form::text('price', $lines->price)}}</td>
        <td>{{Form::submit('Update Line')}}
          {{Form::close()}}
        <tr>
        

        @endforeach

        <td></td><th style="background-color:#000000;color:#ffffff;align:right">TOTAL</td><td align="center">{{number_format($invoice->invoiceTotal($invoice->id), 2)}}</td><tr>

    </table>

    {{View::make('invoiceservices.create')->with('invoice_id', $invoice->id)}}  
  
 
  <div class="thankyou">

  <h3>Thank you for your business! </h3>
  All service carries a 30 day warranty if no virus infection is present.
</div>
</div>

