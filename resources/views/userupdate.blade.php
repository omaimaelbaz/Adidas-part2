{{-- @dd($roledata); --}}
@extends('layouts.header')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Add category</div>

                <div class="card-body">
                    <form method="POST" action="/isertuser">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  style="max-width: 300px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">email</label>

                            <div class="col-md-6">
                                <input id="email" name="email" type="text" class="form-control"  style="max-width: 300px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">RoleId</label>
                            <select name="role_id" id="role_id">
                                @foreach ($roledata as $items )
                                <option value="{{$items->id}}">{{$items->name}}</option>


                                @endforeach

                            </select>


                        </div>

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
