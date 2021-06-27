<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.dashboard') }}" id="topnav-dashboard"
                           role="button">
                            <i class="mdi mdi-view-dashboard me-2"></i>Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.deposit') }}" id="topnav-ui kit"
                           role="button">
                            <i class="mdi mdi-buffer me-2"></i>Deposit
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('user.withdraw') }}" id="topnav-components"
                           role="button">
                            <i class="mdi mdi-cube-outline me-2"></i>Withraw
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('user.mining') }}" id="topnav-pages" role="button">
                            <i class="mdi mdi-tools"></i>Mining
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('user.referrals') }}" id="topnav-ecommerce"
                           role="button">
                            <i class="mdi mdi-vector-link"></i>Referral
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
