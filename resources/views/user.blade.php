
@extends('layouts.header')

@section('content')

<table class="table table-hover">
    <a href="/user" class="btn btn-primary">Add User</a>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">action</th>

      </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>



            <td>
                <a href="" class="btn btn-success">Update</a>

                <a href="" class="btn btn-danger">Delete</a>

            </td>
          </tr>



    </tbody>
  </table>


@endsection
