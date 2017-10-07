
@extends('Templates.template1')
@section('pagetitle')
  {{$AppName}} - {{$ModuleName}}
@endsection

@section('content')
<h1 align=center>{{$AppName}} - {{$ModuleName}}</H1><P>
  <p align=center>
   <br>
    versão: {{$Version}}
  </p>

@endsection
