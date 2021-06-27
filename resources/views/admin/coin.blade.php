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
                            <h4 class="mb-sm-0 font-size-18">coins</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    @if (session()->has('success'))
                    <div class="alert alert-{{ session()->has('success')? 'success' : 'danger' }}">
                        <small>{{ session('success') }}</small>
                    </div>
                    @endif
                    <div class="col-lg-4 col-md-12 col-sm-4">
                        <div class="card card-body py-4">
                            <h3 class="lead text-uppercase">{{ isset($coin->id) ? 'Edit Coin' : 'Add Coin' }}
                            </h3>
                            <div id="coins" class="=">
                                <form action="{{ isset($coin->id) ? route('admin.coin.update', $coin->id) : route('admin.coin.store') }}" method="post" id="addCoinForm"
                                    class="mb-4">
                                    @csrf
                                    @isset($coin->id)
                                        @method('PATCH')
                                    @endisset
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="coin_name" placeholder="Name of Coin"
                                            class="form-control mb-2"
                                            value="{{ isset($coin->id) ? $coin->name : old('pckg_%') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="wallet_id" class="form-label">Wallet Address</label>
                                        <input type="text" name="wallet_id" id="wallet_id" placeholder="Wallet ID"
                                            class="form-control mb-2"
                                            value="{{ isset($coin->id) ? $coin->wallet_id : old('pckg_%') }}">
                                    </div>
                                    <button type="submit" style="letter-spacing:1.3px"
                                        class="btn btn-success w-100 text-uppercase mt-3">
                                        {{ isset($coin->id) ? 'Update coin' : 'Add coin' }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        @if(!isset($coin->id))
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-counter">
                                        <thead>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Wallet ID</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($coins as $coin)
                                            <tr>
                                                <td></td>
                                                <td>{{ $coin->name }}</td>
                                                <td>{{ $coin->wallet_id }}</td>
                                                <td>
                                                    <a href="{{ route('admin.coin.edit', $coin->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-sm btn-danger"
                                                        href="{{ route('admin.coin.delete', $coin->id) }}" onclick="event.preventDefault();
                                                        document.getElementById('delete-package').submit();">
                                                        Delete
                                                    </a>
                                                    <form id="delete-package"
                                                        action="{{ route('admin.coin.delete', $coin->id) }}"
                                                        method="POST" class="d-none">
                                                        @csrf @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
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