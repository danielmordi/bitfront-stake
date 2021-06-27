@extends('layouts.app')

@section('title')
bfs | Deposit
@endsection

@section('content')
<!-- Begin page -->
<div id="layout-wrapper">


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- end page title -->
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-12">
                        <div class="card">
                            <div class="card-header"><small class="lead">Scan Bitfront Stake QR Code</small></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>Steps to follow</h5>
                                        <ul style="list-style-type:  disc !important">
                                            <li style="list-style-type:  disc !important">
                                                Make paymeny buy scanning the QR code on the screen with your bitcoin wallet or copy the wallet ID on
                                                the screen then make payment from your blockchain wallet.
                                            </li>
                                            <li class="my-1" style="list-style-type:  disc !important">
                                                Click the confirm button after the deposit has been completed.
                                            </li>
                                            <li style="list-style-type:  disc !important">
                                                Your deposit will be automatically confirmed, once your payment has been received.
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <img class="align-self-start mb-2 w-100"
                                                     src="https://via.placeholder.com/250"
                                                     alt="Generic placeholder image" width="200" height="250">
                                            </div>
                                            <div class="col-md-6 col-sm-12 oder-first order-sm-last">
                                                <div class="table-responsive py-2">
                                                    <table class="table">
                                                        <tr>
                                                            <td><span class="text-warning">Amount</span></td>
                                                            <td><p style="font-size: 1.2em; letter-spacing:1.5px; font-weight: bolder" class="text-uppercase mb-2">{{ $currentDeposit->amount }}</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="text-warning">Package</span></td>
                                                            <td><p style="font-size: 1.2em; letter-spacing:1.5px; font-weight: bolder" class="text-uppercase mb-2">{{ $currentDeposit->package->name }}</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="text-warning">Status</span></td>
                                                            <td><p style="font-size: 1.2em; letter-spacing:1.5px; font-weight: bolder" class="text-uppercase mb-2">{{ $currentDeposit->status }}</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="text-warning">Wallet Address</span></td>
                                                            <td>{{ $currentDeposit->coin->wallet_id }}</td>
                                                        </tr>
                                                    </table>
                                                    <a href="/account" class="btn w-50 btn-block btn-teal"
                                                       onclick="alert('Completed, please wait while your request is been processed.')">Complete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

@include('includes.script')
@endsection
