@extends('layouts.master')
@section('content')
@include('layouts.error')
                <div class="table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Name of the Meterial</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Date of Purchase</th>
                                <th>Dept</th>
                                {{-- <th>Stock in Kg</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($products) && !empty($products))
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category == 1 ? 'Steel' : 'Chemical'}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->date}}</td>
                                <td>{{$product->stock_dept}}</td>
                                {{-- <td>{{$product->stock_kg}}</td> --}}
                                <td>
                                    <a href="{{route('edit',$product->id)}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{route('delete',$product->id)}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <span>No Materials Found</span>
                            @endif

                        </tbody>
                    </table>
                </div>
@endsection
