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
                            <h4 class="mb-sm-0 font-size-18">Referrals</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="card">
                    <div class="card-header">
                        <ul>
                            <li>Total Referrals: {{ count($refs) }}</li>
                            <li>Total Earned: ${{ Auth::user()->bouns ?? '0.00' }}</li>
                        </ul>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="input-group">
                                    <input type="text" id="copyReferralLink" value="{{ Auth::user()->referral_link }}" readonly class="form-control">
                                    <button class="btn-primary copyReferralLink" data-clipboard-target="#copyReferralLink">Copy!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-counter table-bordered">
                                <thead class="text-uppercase">
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Deposit</th>
                                    <th>Date</th>
                                </thead>
                                <tbody>
                                    @foreach ($refs as $ref)
                                    <tr>
                                        <td></td>
                                        <td>{{ $ref->name }}</td>
                                        <td>{{ $ref->username }}</td>
                                        <td>{{ $ref->profit = null ? 'Not yet' : 'Yes' }}</td>
                                        <td>{{ $ref->created_at->format('m/d/Y') }}</td>
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

    {{-- @include('includes.rightsidebar') --}}

</div>
<!-- END layout-wrapper -->

@include('includes.script')
@endsection