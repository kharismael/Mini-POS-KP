@extends('layout.main')

@section('title', 'Home')

@section('container')
<div class="container">
    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
                <th>Provinces</th>
                <th>Regencies</th>
                <th>Districts</th>
                <th>villages</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->province_name}}</td>
                    <td>{{ $item->regency_name }}</td>
                    <td>{{ $item->district_name }}</td>
                    <td>{{ $item->village_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection