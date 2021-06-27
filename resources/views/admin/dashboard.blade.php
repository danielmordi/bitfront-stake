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
                            <h4 class="mb-sm-0 font-size-18">Admin Panel</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="card">
                    <div class="card-header">
                        User's Biodata
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-counter">
                                    <thead class="text-uppercase">
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Package</th>
                                        <th>Wallet balance</th>
                                        <th>Bonus balance</th>
                                        <th>Hashing Fee</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td></td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->package }}</td>
                                                <td>{{ $user->wallet_balance }}</td>
                                                <td>{{ $user->bonus }}</td>
                                                <td>{{ $user->hashing_fee }}</td>
                                                <td>
                                                    <a href="{{ route('admin.view.user', $user->id) }}" class="btn btn-primary btn-sm">View profile</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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