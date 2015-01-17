@extends('layouts.master')

@section('style)


<style>


    body {
      margin:0;
      width: 100%;
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

    .logo{
    	position: absolute;
    	max-width: 300px;
    }

    .company_address{
    	position: absolute;
    	margin-left: 350px;
    	margin-top:60px;
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
    	font-size: 22px;
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

    h1 {
      font-size: 32px;
      margin: 16px 0 0 0;
      color:#ffffff;
    }

</style>







@stop

