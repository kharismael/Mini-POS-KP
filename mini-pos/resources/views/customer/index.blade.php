@extends('layout.main')

@section('title', 'Daftar Customer')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Customer</h1>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">telp</th>
                        <th scope="col">aksi</th>
                        <th scope="col">created at</th>
                        <th scope="col">updated at</th>
                    </tr>
                <tbody>
                    @foreach( $customer as $cst)
                    <tr>
                        <th scopes="row"></th>
                        <td>Yeyes</td>
                        <td>yeyes@gmail.com</td>
                        <td>jl. manokwati</td>
                        <td>0811111</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection