@extends('layouts.master')
@section('title')
    Salas Targets
@endsection
@section('header')
    Salas Targets
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table table-warning">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Jun</th>
                    <th scope="col">Feb</th>
                    <th scope="col">March</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sales as $name=>$targets)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $name }}</td>
                        @foreach ($targets as $month => $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @empty
                    <tr class="">
                        <td scope="row" class="text-center fw-bold" colspan="5">
                            <h1>No Result Yet</h1>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
