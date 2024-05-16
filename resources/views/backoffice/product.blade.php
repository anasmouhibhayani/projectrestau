@extends('backoffice.layouts.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">producte</h1>
        
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <a class="btn btn-dark mb-2" href="/product/add">add product </a>

                <table  id="datatablesSimple">

                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title product</th>
                            <th>desc product</th>
                            <th>price</th>
                            <th> type menu</th>
                            
                            <th>actions</th>
                        </tr>
                    </thead>
                    

                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->desc }}</td>
                            <td>{{ $product->type }}</td>
                            <td>
                                <a href="{{ url('/product/edit'.'/'.$product->id) }}" style="text-decoration: none; color: green;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ url('/product/delete'.'/'.$product->id) }}" style="text-decoration: none; color: red;">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection