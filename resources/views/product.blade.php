

@extends('layouts.header')

@section('content')

<table class="table table-hover">
    <a href="/addproduct" class="btn btn-primary">Add Product</a>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">description</th>
        <th scope="col">price</th>
        <th scope="col">category</th>

        <th scope="col">Image</th>
        <th scope="col">Quantity</th>
        <th scope="col">Action</th>



      </tr>
    </thead>
    <tbody>
        @foreach ($allproduct as $product)
        <tr>
            <td>{{$product->id}}</td>
            <Td>{{$product->name}}</Td>
            <Td>{{$product->description}}</Td>
            <Td>{{$product->price}}</Td>
            <Td>{{$product->category->name}}</Td>
            <Td><img src="upload/{{$product->Img_path}}" alt="" width="100px"></Td>

            <Td>{{$product->Quantity}}</Td>
            <td>
                <a href="/updateproduct/{{$product->id}}" class="btn btn-secondary">Update</a>

                <a href="/deleteproduct/{{$product->id}}" class="btn btn-">Delete</a>

            </td>
          </tr>

        @endforeach





    </tbody>
  </table>


@endsection
