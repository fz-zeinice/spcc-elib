<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PhysicalController;
use App\Http\Controllers\MybooksController;
use App\Http\Controllers\AdminRecordsController;
use App\Http\Controllers\EbooksController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BookTypesController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\TransactionDetailsController;
use App\Http\Controllers\BookLogsController;

use App\Http\Middleware\Authorized;
use App\Http\Middleware\Guest;
use App\Http\Middleware\Admin;

Route::middleware(Authorized::class)->group(function() {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/about', [AboutController::class, 'about']);
    Route::get('/physicalbooks', [PhysicalController::class, 'physicalbooks']);
    Route::get('/mybooks', [MybooksController::class, 'mybooks']);
    Route::get('/adminrecords', [AdminRecordsController::class, 'adminrecords']);
    Route::get('/ebooks', [EbooksController::class, 'ebooks']);
    Route::get('/subject', [SUbjectController::class, 'subject']);
    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(Admin::class)->group(function() {
        Route::prefix('admin')->group(function() {
            Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

            Route::get('/author', [AuthorController::class, 'index'])->name('admin.auth.index');
            Route::get('/author/add', [AuthorController::class, 'add'])->name('admin.auth.add');
            Route::post('/author/create', [AuthorController::class, 'store'])->name('admin.auth.create');
            Route::get('/author/edit/{id}', [AuthorController::class, 'edit'])->name('admin.auth.edit');
            Route::get('/author/delete/{id}', [AuthorController::class, 'destroy'])->name('admin.auth.delete');
            Route::post('/author/update', [AuthorController::class, 'update'])->name('admin.auth.update');

            Route::get('/books', [BooksController::class, 'index'])->name('admin.books.index');
            Route::get('/books/add', [BooksController::class, 'add'])->name('admin.books.add');
            Route::post('/books/create', [BooksController::class, 'store'])->name('admin.books.create');
            Route::get('/books/edit/{id}', [BooksController::class, 'edit'])->name('admin.books.edit');
            Route::get('/books/delete/{id}', [BooksController::class, 'destroy'])->name('admin.books.delete');
            Route::post('/books/update', [BooksController::class, 'update'])->name('admin.books.update');

            Route::get('/booktypes', [BookTypesController::class, 'index'])->name('admin.booktypes.index');
            Route::get('/booktypes/add', [BookTypesController::class, 'add'])->name('admin.booktypes.add');
            Route::post('/booktypes/create', [BookTypesController::class, 'store'])->name('admin.booktypes.create');
            Route::get('/booktypes/edit/{id}', [BookTypesController::class, 'edit'])->name('admin.booktypes.edit');
            Route::get('/booktypes/delete/{id}', [BookTypesController::class, 'destroy'])->name('admin.booktypes.delete');
            Route::post('/booktypes/update', [BookTypesController::class, 'update'])->name('admin.booktypes.update');

            Route::get('/subjects', [SubjectsController::class, 'index'])->name('admin.subjects.index');
            Route::get('/subjects/add', [SubjectsController::class, 'add'])->name('admin.subjects.add');
            Route::post('/subjects/create', [SubjectsController::class, 'store'])->name('admin.subjects.create');
            Route::get('/subjects/edit/{id}', [SubjectsController::class, 'edit'])->name('admin.subjects.edit');
            Route::get('/subjects/delete/{id}', [SubjectsController::class, 'destroy'])->name('admin.subjects.delete');
            Route::post('/subjects/update', [SubjectsController::class, 'update'])->name('admin.subjects.update');

            Route::get('/status', [StatusController::class, 'index'])->name('admin.status.index');
            Route::get('/status/add', [StatusController::class, 'add'])->name('admin.status.add');
            Route::post('/status/create', [StatusController::class, 'store'])->name('admin.status.create');
            Route::get('/status/edit/{id}', [StatusController::class, 'edit'])->name('admin.status.edit');
            Route::get('/status/delete/{id}', [StatusController::class, 'destroy'])->name('admin.status.delete');
            Route::post('/status/update', [StatusController::class, 'update'])->name('admin.status.update');

            Route::get('/roles', [RolesController::class, 'index'])->name('admin.roles.index');
            Route::get('/roles/add', [RolesController::class, 'add'])->name('admin.roles.add');
            Route::post('/roles/create', [RolesController::class, 'store'])->name('admin.roles.create');
            Route::get('/roles/edit/{id}', [RolesController::class, 'edit'])->name('admin.roles.edit');
            Route::get('/roles/delete/{id}', [RolesController::class, 'destroy'])->name('admin.roles.delete');
            Route::post('/roles/update', [RolesController::class, 'update'])->name('admin.roles.update');

            Route::get('/users', [UsersController::class, 'index'])->name('admin.users.index');
            Route::get('/users/add', [UsersController::class, 'add'])->name('admin.users.add');
            Route::post('/users/create', [UsersController::class, 'store'])->name('admin.users.create');
            Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('admin.users.edit');
            Route::get('/users/delete/{id}', [UsersController::class, 'destroy'])->name('admin.users.delete');
            Route::post('/users/update', [UsersController::class, 'update'])->name('admin.users.update');

            Route::get('/transactions', [TransactionsController::class, 'index'])->name('admin.transactions.index');
            Route::get('/transactions/add', [TransactionsController::class, 'add'])->name('admin.transactions.add');
            Route::post('/transactions/create', [TransactionsController::class, 'store'])->name('admin.transactions.create');
            Route::get('/transactions/edit/{id}', [TransactionsController::class, 'edit'])->name('admin.transactions.edit');
            Route::get('/transactions/delete/{id}', [TransactionsController::class, 'destroy'])->name('admin.transactions.delete');
            Route::post('/transactions/update', [TransactionsController::class, 'update'])->name('admin.transactions.update');

            Route::get('/transactionsdetails', [TransactionDetailsController::class, 'index'])->name('admin.transactiondetails.index');
            Route::get('/transactiondetails/add', [TransactionDetailsController::class, 'add'])->name('admin.transactiondetails.add');
            Route::post('/transactiondetails/create', [TransactionDetailsController::class, 'store'])->name('admin.transactiondetails.create');
            Route::get('/transactiondetails/edit/{id}', [TransactionDetailsController::class, 'edit'])->name('admin.transactiondetails.edit');
            Route::get('/transactiondetails/delete/{id}', [TransactionDetailsController::class, 'destroy'])->name('admin.transactiondetails.delete');
            Route::post('/transactiondetails/update', [TransactionDetailsController::class, 'update'])->name('admin.transactiondetails.update');

            Route::get('/booklogs', [BookLogsController::class, 'index'])->name('admin.booklogs.index');
            Route::get('/booklogs/add', [BookLogsController::class, 'add'])->name('admin.booklogs.add');
            Route::post('/booklogs/create', [BookLogsControllerr::class, 'store'])->name('admin.booklogs.create');
            Route::get('/booklogs/edit/{id}', [BookLogsController::class, 'edit'])->name('admin.booklogs.edit');
            Route::get('/booklogs/delete/{id}', [BookLogsController::class, 'destroy'])->name('admin.booklogs.delete');
            Route::post('/booklogs/update', [BookLogsController::class, 'update'])->name('admin.booklogs.update');
        });
    });
});

Route::middleware(Guest::class)->group(function() {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('/validate', [LoginController::class, 'validate'])->name('login.validate');
    Route::post('/createAccount', [LoginController::class, 'createAccount'])->name('createAccount');
});
