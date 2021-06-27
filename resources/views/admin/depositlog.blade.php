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
                            <h4 class="mb-sm-0 font-size-18">Deposit Log</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-counter">
                                <thead class="text-uppercase">
                                    <th>S/N</th>
                                    <th>Username</th>
                                    <th>Amount</th>
                                    <th>Package</th>
                                    <th>Deposit Coin</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @if (session('success'))
                                        <span class="alert alert-success">
                                            {{ session('success') }}
                                        </span>
                                    @endif
                                    @foreach ($deposits as $log)
                                        <tr>
                                            <td></td>
                                            <td>{{ $log->user->name }}</td>
                                            <td>{{ $log->amount }}</td>
                                            <td>{{ $log->package->name }}</td>
                                            <td>{{ $log->coin->name }}</td>
                                            <td>
                                                <span class="badge bg-orange">{{ $log->status }}</span>
                                            </td>
                                            <td>{{ $log->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('admin.confirmDeposit', $log->id) }}" class="btn btn-primary btn-sm">Confirm</a>
                                                <a href="#" class="btn btn-danger btn-sm">Cancel</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
                        © Bitfrontstake Inc.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i>
                        </div>
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
@endsection