@extends('layouts.app')

@section('title')
bfs | MIning
@endsection

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
                            <h4 class="mb-sm-0 font-size-18">MIning Packages</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    @foreach ($packages as $package)
                    <div class="col-md-3 col-sm-12">
                        <div class="card">
                            <div class="card-header text-uppercase">
                                {{ $package->name }}
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="display-4 font-weight-bold text-center">
                                            {{ $package->percentage }}<small class="font-weight-bold">%</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        Hashing Rate <span style="float: right">{{ $package->hash_rate }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        Min <span style="float: right">${{ $package->min_val }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        Max <span style="float: right">${{ $package->max_val }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        Duration <span style="float: right">{{ $package->duration }} days</span>
                                    </li>
                                    <li class="list-group-item">FCA Approved</li>
                                    <li class="list-group-item">
                                        <a href="{{ route('user.deposit') }}" class="btn btn-teal w-100 text-uppercase" style="letter-spacing: 1.4px">
                                            Change Package
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
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