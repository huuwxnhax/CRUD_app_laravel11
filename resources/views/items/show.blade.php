@extends('layout')

@section('content')
    <h1>Show Item</h1>
    <p><strong>Name:</strong> {{ $item->name }}</p>
    <p><strong>Description:</strong> {{ $item->description }}</p>
    <a href="{{ route('items.index') }}">Back</a>
@endsection
