<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}" id="topnav-dashboard"
                           role="button">
                            <i class="mdi mdi-view-dashboard me-2"></i>Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.packages') }}" id="topnav-ui kit"
                           role="button">
                            <i class="mdi mdi-buffer me-2"></i>Packages
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.coin') }}" id="topnav-ui kit"
                           role="button">
                            <i class="mdi mdi-buffer me-2"></i>Coins
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin.depositlog') }}" id="topnav-pages" role="button">
                            <i class="mdi mdi-tools"></i>Deposit Log
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin.withdrawalog') }}" id="topnav-ecommerce"
                           role="button">
                            <i class="mdi mdi-vector-link"></i>Withdrawal Request
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="mdi mdi-shield-account-variant"></i>Site Settings
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
