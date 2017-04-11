@extends('myBlog.component.master')



@section('content')

<div class="page-header">
    <h1>Welcome {{ Auth::user()->name }}</h1>
</div>

@endsection