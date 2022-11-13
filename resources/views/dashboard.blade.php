@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    Welcome to your application dashboard!
@endsection

@section('footerscript')
    @parent
    <script src='dashboard.js'></script>
@endsection


