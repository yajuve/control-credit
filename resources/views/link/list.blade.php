@extends('app')

@if(Session::has('success'))
    <p>{{ Session::get('success') }}</p>
@endif

@if(Session::has('error'))
    <p>{{ Session::get('error') }}</p>
@endif

@section('content')
    @foreach($links as $link)
        <p>{{ $link->name }} <a href="{{ route('showLink', ['id' => $link->id]) }}">Details</a></p>
    @endforeach
@endsection