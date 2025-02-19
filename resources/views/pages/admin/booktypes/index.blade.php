@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a href="{{ route("admin.booktypes.add") }}">Create New</a>
                </h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-sm m-0" id="table_data">
                    <thead>
                        <tr>
                            <th class="scope">#</th>
                            <th class="scope">Name</th>
                            <th class="scope">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $n = 1;
                        @endphp

                        @foreach ($booktypes as $booktype)
                            <tr>
                                <th>{{ $n++ }}</th>
                                <td>{{ $booktype->bt_name }}</td>
                                <td>
                                    <a href="{{ route('admin.booktypes.edit', $booktype->bt_id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('admin.booktypes.delete', $booktype->bt_id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
