@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.booklogs.update') }}" method="post">
@csrf
<div class="row">
    <div class="col-6 offset-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                    Edit {{ Str::ucfirst($user->menu) }}
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $booklog->bl_name }}" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="id" value="{{ $booklog->bl_id }}" class="btn btn-success float-right">Save</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection