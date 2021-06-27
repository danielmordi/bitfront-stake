@extends('layouts.app')

@section('title')
bfs | Dashboard
@endsection

<style>
    .tradingview-widget-copyright {
        display: none;
    }
</style>

@section('content')
<!-- Begin page -->
<div id="layout-wrapper">

    @include('includes.header')
    @include('includes.navbar')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mini-stat">
                                    <span class="mini-stat-icon bg-purple me-0 float-end"><i
                                            class="mdi mdi-wallet"></i></span>
                                    <div class="mini-stat-info">
                                        <span class="counter text-purple">{{ Auth::user()->wallet_balance ?? '0.00' }}</span>
                                        Main Wallet Balance
                                    </div>
                                    <p class=" mb-0 mt-4 text-muted">Daily ROI <span class="float-end"><i
                                                class="fa fa-caret-up me-1"></i>{{ $package->percentage ?? 0 }}%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End col -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mini-stat">
                                    <span class="mini-stat-icon bg-blue-grey me-0 float-end"><i
                                            class="mdi mdi-speedometer"></i></span>
                                    <div class="mini-stat-info">
                                        <span class="counter text-blue-grey">{{ Auth::user()->hashing_fee ?? '$0.00' }}</span>
                                        Hashing Rate Fee
                                    </div>
                                    <p class="text-muted mb-0 mt-4">Hashing rate: {{ $package->hash_rate ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mini-stat">
                                    <span class="mini-stat-icon bg-brown me-0 float-end"><i
                                            class="mdi mdi-account-group"></i></span>
                                    <div class="mini-stat-info">
                                        <span class="counter text-brown">{{ Auth::user()->bonus ?? '$0.00' }}</span>
                                        Bonus
                                    </div>
                                    <p class="text-muted mb-0 mt-4">Total referral: {{ count(Auth::user()->referrals)  ?? '0' }} </p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End col -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mini-stat">
                                    <span class="mini-stat-icon bg-teal me-0 float-end"><i
                                            class="mdi mdi-package"></i></span>
                                    <div class="mini-stat-info">
                                        <span class="counter text-teal">{{ $package->name ?? 'Add Funds your account' }}</span>
                                        Package
                                    </div>
                                    <p class="text-muted mb-0 mt-4">Duration: {{ $package->duration ?? '' }}days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col -->
                </div>
                <!-- end row-->

                <div class="row">

                    <div class="col-xl-9">

                        <div class="card card-body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                {
                                    "width": "100%",
                                    "height": "490",
                                    "defaultColumn": "moving_averages",
                                    "screener_type": "crypto_mkt",
                                    "displayCurrency": "USD",
                                    "colorTheme": "dark",
                                    "locale": "en",
                                    "isTransparent": true
                                }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>

                    </div>

                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">Two Factor Authentication</h4>
                                <div class="row">
                                    <form action="{{ route('two-factor.enable') }}" method="post">
                                        @if(session('status') == 'two-factor-authentication-disabled')
                                        <div class="alert alert-success">Two factor authentication has been disabled.
                                        </div>
                                        @elseif(session('status') == 'two-factor-authentication-enabled')
                                        <div class="alert alert-success">Two factor authentication has been enabled.
                                        </div>
                                        @endif
                                        @csrf
                                        @if(auth()->user()->two_factor_secret)
                                        @method('DELETE')

                                        <div class="d-flex justify-content-center mb-2 p-3 bg-white">
                                            {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                        </div>

                                        <button type="button" class="btn btn-link p-0 m-0 align-baseline"
                                         data-bs-toggle="modal" data-bs-target="#myModal">Copy your 2FA Recovery codes</button>

                                        <!-- sample modal content -->
                                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myModalLabel">2FA Recovery codes</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Please copy your recovery codes and keep them safe.</p>
                                                        <span>We strongly recommend that you copy your recovery codes and keep them safe.</span>
                                                        <span>Recovery codes are used to access your account,
                                                            in the event you cannot access two-factor authentication codes</span>
                                                        <ul class="list-group mt-2">
                                                            @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as
                                                            $code)
                                                            <li class="list-group-item text-center">{{ $code }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <button type="submit" class="w-100 btn btn-danger mt-2">Disable</button>
                                        @else
                                        <button type="submit" class="w-100 btn btn-primary">Enable</button>
                                        @endif
                                    </form>
                                </div>


                                <div id="donut-chart" dir="ltr"></div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        © Bitfront Stake Inc.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    {{-- @include('includes.rightsidebar') --}}

</div>
<!-- END layout-wrapper -->

@include('includes.script')
@endsection
