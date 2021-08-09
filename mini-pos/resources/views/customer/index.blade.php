@extends('layout.main')

@section('title', 'Daftar Customer')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-15">
            <h1 class="mt-3">Daftar Customer</h1>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Province</th>
                        <th scope="col">Regency</th>
                        <th scope="col">District</th>
                        <th scope="col">Village</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Aksi</th>
                    </tr>
                <tbody>
                    @foreach($customer as $cust)
                    <tr>
                        <th scopes="row">{{ $loop->iteration}}</th>
                        <td>{{ $cust->name }}</td>
                        <td>{{ $cust->email }}</td>
                        <td>{{ $cust->addess }}</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>{{ $cust->village_name }}</td>
                        <td>{{ $cust->telp }}</td>
                        <td>
                            <a class="btn btn-primary" href="/customer/edit" role="edit">edit</a>
                            <a class="btn btn-primary" href="/customer/delete" role="delete">delete</a>
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