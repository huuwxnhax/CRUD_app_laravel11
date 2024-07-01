@extends('layout')

@section('content')
    <h1>Items</h1>
    <a href="{{ route('items.create') }}">Create new item</a>
    <table class="table table-light">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('items.show', $item->id) }}">Show</a>
                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        <form method="post" action="{{ route('items.destroy', $item->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection