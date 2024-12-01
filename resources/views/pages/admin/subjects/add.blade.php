@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.subjects.create') }}" method="post">
@csrf
<div class="row">
    <div class="col-6 offset-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    Add {{ Str::ucfirst($user->menu) }}
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Code</label>
                    <input type="text" name="code" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Save</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
