<!doctype html>
<html lang="en">
<head>

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
      position: absolute;
      font-size: 11px;
      margin-left: 350px;
      margin-top:60px;
      width:200px;
      color:#000000;
      background-color:#ffffff;
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

    .pdftable {
  margin:0px;padding:0px;
  width:100%;
  box-shadow: 10px 10px 5px #888888;
  border:1px solid #000000;
    text-align:middle;
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
  
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
  
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
  
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;
}.pdftable table{
  border-collapse: collapse;
  border-spacing: 0;
  width:100%;
  height:100%;
  margin:0px;padding:0px;
}.pdftable tr:last-child td:last-child {
  -moz-border-radius-bottomright:0px;
  -webkit-border-bottom-right-radius:0px;
  border-bottom-right-radius:0px;
}
.pdftable table tr:first-child td:first-child {
  -moz-border-radius-topleft:0px;
  -webkit-border-top-left-radius:0px;
  border-top-left-radius:0px;

}
.pdftable table tr:first-child td:last-child {
  -moz-border-radius-topright:0px;
  -webkit-border-top-right-radius:0px;
  border-top-right-radius:0px;
}.pdftable tr:last-child td:first-child{
  -moz-border-radius-bottomleft:0px;
  -webkit-border-bottom-left-radius:0px;
  border-bottom-left-radius:0px;
}.pdftable tr:hover td{
  
}
.pdftable tr:nth-child(odd){ background-color:#ffffff; }
.pdftable tr:nth-child(even)    { background-color:#ffffff; }.pdftable td{
  vertical-align:right;
  
  
  border:1px solid #000000;
  border-width:0px 1px 1px 0px;
  text-align:left;
  padding:7px;
  font-size:12px;
  font-family:Arial;
  font-weight:normal;
  color:#000000;
}.pdftable tr:last-child td{
  border-width:0px 1px 0px 0px;
}.pdftable tr td:last-child{
  border-width:0px 0px 1px 0px;
  text-align:right;
}.pdftable tr:last-child td:last-child{
  border-width:0px 0px 0px 0px;
}
.pdftable tr:first-child td{
    background:-o-linear-gradient(bottom, #000000 5%, #000000 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #000000), color-stop(1, #000000) );
  background:-moz-linear-gradient( center top, #000000 5%, #000000 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000", endColorstr="#000000");  background: -o-linear-gradient(top,#000000,000000);

  background-color:#000000;
  border:0px solid #000000;
  text-align:center;
  border-width:0px 0px 1px 1px;
  font-size:14px;
  font-family:Arial;
  font-weight:bold;
  color:#ffffff;
}
.pdftable tr:first-child:hover td{
  background:-o-linear-gradient(bottom, #000000 5%, #000000 100%);  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #000000), color-stop(1, #000000) );
  background:-moz-linear-gradient( center top, #000000 5%, #000000 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000", endColorstr="#000000");  background: -o-linear-gradient(top,#000000,000000);

  background-color:#000000;
}
.pdftable tr:first-child td:first-child{
  border-width:0px 0px 1px 0px;

}
.pdftable tr:first-child td:last-child{
  border-width:0px 0px 1px 1px;
}


    a, a:visited {
      text-decoration:none;
    }


</style>

</head>



<body>



	<div class="row">
	<div class="logo"><img src="C:/xampp/htdocs/tsoft_alpha/public/images/logo.jpg"></div>
	<div class="document_type">
		<h2>INVOICE</h2>
		<table width="100%">
			<tr><td>Date:</td><td>{{Carbon::parse('today')->format('m/d/Y')}}</td><tr>
			<td>Inoice #:</td><td>{{Carbon::parse($invoice->created_at)->format('my')}}-{{$invoice->invoice_number}}</td><tr>
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
      @foreach($invoice->clientInfo($invoice->client_id) as $invo)
      {{$invo->name}}<br>
      {{$invo->bill_street1}} {{$invo->bill_street2}}<br>
			{{$invo->bill_city}} {{$invo->bill_state}}, {{$invo->bill_zip}}
      @endforeach
			<br>
		</div>
	</div>
<br>
		<table width="100%" class="pdftable"><tr>
			<th style="background-color:#000000;color:#ffffff;width:50%">
				Item/Description</th>
			<th style="background-color:#000000;color:#ffffff;width:20%">
				Quantity</th>
			<th style="background-color:#000000;color:#ffffff;width:20%;">
				Amount</th><tr>

        @foreach($invoice->getServices($invoice->id) as $lines)
        <td><b><u>{{$lines->service}}</b></u> - <i>{{$lines->description}}</i></td><td align="center">{{$lines->quantity}}</td><td align="right">{{number_format($lines->price, 2)}}</td><tr>
        @endforeach

        <td></td><th style="background-color:#000000;color:#ffffff;align:right">TOTAL</td><td align="center">{{number_format($invoice->invoiceTotal($invoice->id), 2)}}</td><tr>

		</table>

	<div class="thankyou">

	<h3>Thank you for your business! </h3>
	All service carries a 30 day warranty if no virus infection is present.
</div>






</body>
</html>


