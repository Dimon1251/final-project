<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="/">
        <svg>
            <use xlink:href="#ion-ios-pulse-strong"></use>
        </svg>
        Spark
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img src="/admin/img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
            <div class="fw-bold">{{Auth::user()->name}}</div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>
            <li class="sidebar-item active">
                <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
                    <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
                </a>
                <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.users.index') }}">Users</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.products.index') }}">Products</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.categories.index') }}">Categories</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.brands.index') }}">Brand</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.transactions.index') }}">Transactions</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
