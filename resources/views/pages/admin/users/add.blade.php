@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.users.create') }}" method="post">
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
                    <label for="name">First Name</label>
                    <input type="text" name="userfname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Middle Name</label>
                    <input type="text" name="usermname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" name="userlname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Suffix</label>
                    <input type="text" name="usersuffix" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Date of Birth</label>
                    <input type="text" name="dateofbirth" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Role ID</label>
                    <input type="text" name="roleid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">User QR</label>
                    <input type="text" name="userqr" class="form-control">
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
