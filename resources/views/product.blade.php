

@extends('layouts.header')

@section('content')


<form id="searchForm" action='/product/search' method="GET" class="search-container">
    <div class="row">
        <div class="col-md-3">
            <label for="searchInput">Search by Product Name:</label>
            <input type="text" id="searchInput" name="search" class="form-control" placeholder="Search by product name...">
        </div>
        <div class="col-md-3">
            <label for="price">Price Range:</label>
            <select name="price" id="price" class="form-control">
                <option value="">Select Price Range</option>
                <option value="0-50">0 - 50</option>
                <option value="51-100">51 - 100</option>
                <option value="101-200">101 - 200</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="quantity">Quantity:</label>
            <select name="quantity" id="quantity" class="form-control">
                <option value="">Select Quantity</option>
                <option value="0-10">0 - 10</option>
                <option value="11-50">11 - 50</option>
                <option value="51-100">51 - 100</option>
            </select>
        </div>
        <div class="col-md-3" >
            <label class="invisible">Search</label>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
</form>
<style>
    .search-container {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .search-container button {
        margin-top: 30px;
    }
</style>


@if(isset($searchQuery))
<div class="alert " role="alert">
    Your search results for: "<strong>{{ $searchQuery }}</strong>"
</div>
@endif







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
