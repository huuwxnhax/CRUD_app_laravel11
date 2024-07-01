@extends('layout')

@section('content')
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ $item->name }}">
        <label>Description</label>
        <textarea name="description">{{ $item->description }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
