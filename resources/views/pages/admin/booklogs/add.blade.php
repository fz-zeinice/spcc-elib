@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.booklogs.create') }}" method="post">
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
                    <label for="name">User ID</label>
                    <input type="text" name="userid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Book ID</label>
                    <input type="text" name="bookid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Book Logs Date</label>
                    <input type="text" name="booklogsdate" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Book Logs Status</label>
                    <input type="text" name="booklogsstatus" class="form-control">
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
