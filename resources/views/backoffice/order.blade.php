@extends('backoffice.layouts.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">order</h1>
        
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>full name</th>
                            <th>food name</th>
                            <th>order detaille</th>
                            <th> adress</th>
                            <th>number</th>
                            <th>how much</th>
                            <th>when you want</th>
                        </tr>
                    </thead>
                    

                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->full_Name }}</td>
                            <td>{{ $order->food_name }}</td>
                            <td>{{ $order->order_detaille }}</td>
                            <td>{{ $order->Your_adress }}</td>
                            <td>{{ $order->Numbre }}</td>
                            <td>{{ $order->How_much}}</td>
                            <td>{{ $order->when_you_want }}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection