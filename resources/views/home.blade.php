@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form method="POST" action="{{route('store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Material Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div><br>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" name="date" class="form-control" placeholder="Date" />
                        </div><br>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control" placeholder="kg" />
                        </div><br>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="0.00"/>
                        </div><br>
                        <div class="form-group">
                            <label for="stock_dept">Stock Dept</label>
                            <input type="text" name="stock_dept" class="form-control" />
                        </div><br>
                        <div class="form-group">
                            <label for="others">Others If Any</label>
                            <input type="text" name="others" class="form-control" />
                        </div><br>
                        <label for="category">Category</label>
                        <select name="category" id="category">
                            <option selected>--Select--</option>
                            <option value="steel">Steel</option>
                            <option value="chemical">Chemical</option>
                        </select><br><br>
                        <button type="submit"  class="btn btn-success">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
