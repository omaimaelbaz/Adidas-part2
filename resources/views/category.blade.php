@extends('layouts.header')

@section('content')

<!-- Search Form -->
<form action='/category/search' method="GET">
    <input type="text" name="search" placeholder=" category name...">
    <br> <br>
    <button type="submit" class="btn btn-primary">Search</button>
</form>

<!-- Category Table -->
<table class="table table-hover">
    <a href="/addcategory" class="btn btn-primary">Add Category</a>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item )
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>

            <td>
                <a href="/updatecategory/{{$item->id}}" class="btn btn-success">Update</a>
                <a href="/supcategory/{{$item->id}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
    </tbody>
</table>

@endsection
