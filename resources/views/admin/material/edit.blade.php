@extends('layouts.master')

@section('content')
<form method="POST" action="{{route('update',$product->id)}}">
    @csrf
    <div class="row my-4">
        <div class="form-group col-6">
            <label for="name">Material Name</label>
            <input type="text" value="{{$product->name}}" name="name" class="form-control" />
        </div>
        <div class="form-group col-6">
            <label for="date">Date</label>
            <input type="text" value="{{$product->date}}" name="date" class="form-control" placeholder="Date" />
        </div>
        <div class="form-group col-6">
            <label for="quantity">Quantity</label>
            <input type="text" value="{{$product->quantity}}"name="quantity" class="form-control" placeholder="kg" />
        </div>
        <div class="form-group col-6">
            <label for="price">Price</label>
            <input type="text" value="{{$product->price}}" name="price" class="form-control" placeholder="0.00"/>
        </div>
        <div class="form-group col-6">
            <label for="stock_dept">Stock Dept</label>
            <input type="text" value="{{$product->stock_dept}}" name="stock_dept" class="form-control" />
        </div>
        <div class="form-group col-6">
            <label for="others">Others If Any</label>
            <input type="text" value="{{$product->others}}" name="others" class="form-control" />
        </div>
        <div class="form-group col-6">
            <label for="category">Category</label>
            <select class="form-control" name="category" id="category">
                {{-- <option selected>--Select--</option> --}}
                <option value="1"{{$product->category == 1 ? 'selected' : ''}}>Steel</option>
                <option value="2"{{$product->category == 2 ? 'selected' : ''}}>Chemical</option>
            </select>
        </div>
        <div class="text-center">
            <button type="submit"  class="btn btn-success mt-3 justify-content-center">Update</button>
        </div>
</form>
@endsection


