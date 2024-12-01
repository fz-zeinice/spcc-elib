@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.books.create') }}" method="post">
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
                    <label for="name">Author ID</label>
                    <input type="text" name="authorid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Subject ID</label>
                    <input type="text" name="subjectid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Book Year</label>
                    <input type="text" name="bookyear" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Book Quantity</label>
                    <input type="text" name="bookquantity" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Book ISBN</label>
                    <input type="text" name="bookisbn" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Book DD</label>
                    <input type="text" name="bookdd" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Book Type ID</label>
                    <input type="text" name="booktypeid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Book QR</label>
                    <input type="text" name="bookqr" class="form-control">
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
