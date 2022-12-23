@extends('cms::layouts.master')

@section('content')
<h1>Admin Dashboard</h1>
<p>Welcome User, to the dashboard.</p>
@endsection

@section('beforecontent')
@include('cms::layouts.adminbar')
@endsection