@extends('layouts.master')
@section('header', 'All Employees')
@section('title', 'All Employees')
@section('content')
    <div class="table-responsive">
        <table class="table table-info">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FIRST NAME</th>
                    <th scope="col">LAST NAME</th>
                    <th scope="col">EMAIL </th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">HIRE_DATE</th>
                    <th scope="col">JOB ID</th>
                    <th scope="col">SALARY</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $employee->FIRST_NAME }}</td>
                        <td>{{ $employee->LAST_NAME }}</td>
                        <td>{{ $employee->EMAIL }}</td>
                        <td>{{ $employee->PHONE_NUMBER }}</td>
                        <td>{{ $employee->HIRE_DATE }}</td>
                        <td>{{ $employee->JOB_ID }}</td>
                        <td>{{ $employee->SALARY }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">
                            <h2 class="text-center">No Employees Yet</h2>
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>

@endsection
