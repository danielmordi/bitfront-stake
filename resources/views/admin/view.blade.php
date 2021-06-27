@extends('layouts.app')

@section('title')
bfs | Dashboard
@endsection

@section('content')
<!-- Begin page -->
<div id="layout-wrapper">

    @include('includes.header')
    @include('includes.admin-navbar')

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
                            <h4 class="mb-sm-0 font-size-18 text-uppercase">{{ $user->name }}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="card card-body">
                    <div class="profile-widget">
                        <h4 class="mt-3" style="letter-spacing: 1.3px">{{ $user->name }}</h4>
                        <p><i class="fa fa-map-marker"></i> {{ $user->package }}</p>
                        <ul class="list-inline row mt-4 clearfix mb-0">
                            <li class="col-md-4 col-sm-12">
                                <p class="mb-1 font-size-18 text-warning">Wallet Balance</p>
                                <p class="text-muted mb-0 fw-bold display-4">{{ $user->wallet_balance }}</p>
                            </li>
                            <li class="col-md-4 col-sm-12">
                                <p class="mb-1 font-size-18 fw-bold text-warning">Bonus</p>
                                <p class="text-muted mb-0 fw-bold display-4">{{ $user->bonus }}</p>
                            </li>
                            <li class="col-md-4 col-sm-12">
                                <p class="mb-1 font-size-18 fw-bold text-warning">Hashing Fees</p>
                                <p class="text-muted mb-0 fw-bold display-4">{{ $user->hashing_fee }}</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card card-body p-0">
                    <ul class="list-group p-1 list-group-flush">
                        <li class="list-group-item p-2">
                            <p class="text-uppercase">Wallet Balanace</p>
                            <div id="walletBalanaceAlert"></div>
                            <form method="post" style="display: " class="hideInput" id="walletBalanceForm">
                                @csrf @method('PATCH')
                                <div class="input-group mb-3">
                                    <input type="text" name="wb_amount" value="{{ $user->wallet_balance }}" class="form-control">
                                    <div class="input-group-append">
                                      <button class="btn btn-secondary text-uppercase"
                                       type="submit" id="walletBalanceBtn" style="letter-spacing: 1.3px">Update</button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="list-group-item p-2">
                            <p class="text-uppercase">Bonus</p>
                            <div id="bonusAlert"></div>
                            <form method="post" style="display: " class="hideInput" id="bonusForm">
                                @csrf @method('PATCH')
                                <div class="input-group mb-3">
                                    <input type="text" name="b_amount" value="{{ $user->bonus }}" class="form-control">
                                    <div class="input-group-append">
                                      <button class="btn btn-secondary text-uppercase" id="bonusBtn"
                                       type="submit" style="letter-spacing: 1.3px">Update</button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="list-group-item p-2">
                            <p class="text-uppercase">Hashing fee</p>
                            <div id="hashRateAlert"></div>
                            <form method="post" style="display: " class="hideInput" id="hashingFeeForm">
                                @csrf @method('PATCH')
                                <div class="input-group mb-3">
                                    <input type="text" name="hr_amount" class="form-control" value="{{ $user->hashing_fee }}">
                                    <div class="input-group-append">
                                      <button class="btn btn-secondary text-uppercase" id="hashRateBtn" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>

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

@include('includes.rightsidebar')

</div>
<!-- END layout-wrapper -->

@include('includes.script')
@include('includes.fetch')
@endsection