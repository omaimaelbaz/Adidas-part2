
@extends('layouts.header')

@section('content')

<table class="table table-hover">
    <a href="/user" class="btn btn-primary">Add User</a>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role_Id</th>
        <th scope="col">action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item )
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->role_id}}</td>



            <td>
                <a href="" class="btn btn-success">Update</a>

                <a href="/deleteuser/{{$item->id}}" class="btn btn-danger">Delete</a>
                

            </td>
          </tr>

        @endforeach()






    </tbody>
  </table>


@endsection
