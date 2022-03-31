@extends('layouts.master')

@section('content')
<form method="POST" action="{{route('store')}}">
    @csrf
    <div class="row my-4">
        <div class="form-group col-6">
            <label for="name">Material Name</label>
            <input type="text" name="name" required class="form-control" />
        </div>
        <div class="form-group col-6">
            <label for="date">Date</label>
            <input type="text" name="date" class="form-control" required placeholder="Date" />
        </div>
        <div class="form-group col-6">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" required placeholder="kg" />
        </div>
        <div class="form-group col-6">
            <label for="price">Price</label>
            <input type="number" step=0.01 name="price" required class="form-control" placeholder="0.00" />
        </div>
        <div class="form-group col-6">
            <label for="stock_dept">Stock Dept</label>
            <input type="text" name="stock_dept" required class="form-control" />
        </div>
        <div class="form-group col-6">
            <label for="others">Others If Any</label>
            <input type="text" name="others" class="form-control" />
        </div>
        <div class="form-group col-6">
            <label for="category">Category</label>
            <select class="form-control" name="category" required id="category">
                <option value="">--Select--</option>
                <option value="1">Steel</option>
                <option value="2">Chemical</option>
            </select>
        </div>

    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success mt-3 justify-content-center">Save</button>
    </div>

</form>
@endsection
