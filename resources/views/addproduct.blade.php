@extends('layouts.header')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Add product</div>

                <div class="card-body">
                    <form method="POST" action="/insertproduct" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="Img_path">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" >
                            </div>
                        </div>
                        @error('name')
                                    <p class="text-danger ps-4 mx-3">
                                        {{ $message }}
                                    </p>
                                @enderror
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description"  >
                            </div>
                        </div>
                        @error('description')
                                    <p class="text-danger ps-4 mx-3">
                                        {{ $message }}
                                    </p>
                                @enderror
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" >
                            </div>
                        </div>
                        @error('price')
                                    <p class="text-danger ps-4 mx-3">
                                        {{ $message }}
                                    </p>
                                @enderror
                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">Category</label>
                            <div class="col-md-6">
                                <select class="form-control" name="category_id" id="category_id">
                                    @foreach ($data as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('category_id')
                                    <p class="text-danger ps-4 mx-3">
                                        {{ $message }}
                                    </p>
                                @enderror
                        <div class="form-group row">
                            <label for="Quantity" class="col-md-4 col-form-label text-md-right">Quantity</label>

                            <div class="col-md-6">
                                <input id="Quantity" type="text" class="form-control" name="Quantity">
                            </div>
                        </div>
                        @error('Quantity')
                                    <p class="text-danger ps-4 mx-3">
                                        {{ $message }}
                                    </p>
                                @enderror

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
