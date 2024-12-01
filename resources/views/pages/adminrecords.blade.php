@extends('layouts.app')

@section('content')

    <h1>Admin Records</h1>
    <hr class="border border-primary border-3 opacity-75">

    <table class="table table-bordered">
        <thead>
            <th>Book Code</th>
            <th>Title</th>
            <th>Student Name</th>
            <th>Status</th>
            <th>Date Borrowed</th>
            <th>Due Date</th>
            <tr>
                <td>#</td>
                <td>Book Title</td>
                <td>Name of Student</td>
                <td>Book Status</td>
                <td>MM-DD-YYYY</td>
                <td>MM-DD-YYYY</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#</td>
                <td>Book Title</td>
                <td>Name of Student</td>
                <td>Book Status</td>
                <td>MM-DD-YYYY</td>
                <td>MM-DD-YYYY</td>
            </tr>
            <tr>
                <td>#</td>
                <td>Book Title</td>
                <td>Name of Student</td>
                <td>Book Status</td>
                <td>MM-DD-YYYY</td>
                <td>MM-DD-YYYY</td>
            </tr>
        </tbody>
    </table>


@endsection
