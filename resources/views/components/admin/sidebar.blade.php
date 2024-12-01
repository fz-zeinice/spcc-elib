<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary spcc-bg-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('img/logo.png') }}" alt="SPCC Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>E-</strong> Library</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/logo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            Name Here
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route("admin.dashboard") }}" class="nav-link {{ $user->menu == "dashboard" ? "active" : "" }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.auth.index") }}" class="nav-link {{ $user->menu == "author" ? "active" : "" }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Authors
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.books.index") }}" class="nav-link {{ $user->menu == "books" ? "active" : "" }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Books
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.booktypes.index") }}" class="nav-link {{ $user->menu == "booktypes" ? "active" : "" }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Book Types
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.subjects.index") }}" class="nav-link {{ $user->menu == "subjects" ? "active" : "" }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Subject
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.status.index") }}" class="nav-link {{ $user->menu == "status" ? "active" : "" }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Status
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ $user->menu == "roles" ? "active" : "" }}">
                    <i class="nav-icon fas fa-critical-role"></i>
                    <p>
                        Roles
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.users.index") }}" class="nav-link {{ $user->menu == "users" ? "active" : "" }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.transactions.index") }}" class="nav-link {{ $user->menu == "transactions" ? "active" : "" }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Transactions
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.transactiondetails.index") }}" class="nav-link {{ $user->menu == "transactionsdetails" ? "active" : "" }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Transaction Details
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.booklogs.index") }}" class="nav-link {{ $user->menu == "booklogs" ? "active" : "" }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Book Logs
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

