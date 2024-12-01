@extends('layouts.app')

@section('content')

<style>
    .container {
        margin-top: 50px;
    }
    .header {
        text-align: center;
        padding: 50px 0;
        background-color: #1230AE;
        color: white;
    }
    .header h1 {
        margin: 0;
        font-size: 36px;
    }
    .content {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }
    .content h2 {
        color: #1230AE;
    }
    .book-card {
        background-color: rgba(255, 255, 255, 0.1);
        margin-bottom: 20px;
    }
    .book-card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
</style>

    <div class="container">
    <!-- <div class="header">
        <h1>Welcome to SPCC E-Library</h1>
     </div> -->
    <div class="content">
        <h2>E-Books</h2>
        <div class="row">
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 1</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 2</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 3</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 4</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 5</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 6</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 7</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 8</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 8</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 8</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 8</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card book-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Book Title 8</h5>
                        <p class="card-text">Author: Author Name</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


@endsection
