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
                            <h4 class="mb-sm-0 font-size-18">Packages</h4>
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
                            <h3 class="lead text-uppercase">{{ isset($package->id) ? 'Edit package' : 'Add package' }}
                            </h3>
                            <div id="packages" class="=">
                                <form
                                    action="{{ isset($package->id) ? route('admin.packages.update', $package->id) : route('admin.packages.store') }}"
                                    method="post">
                                    @csrf
                                    @isset($package->id)
                                    @method('PATCH')
                                    @endisset
                                    <div class="form-group mt-2">
                                        <label for="pckg_name" class="form-label">Package Name</label>
                                        <input type="text" name="pckg_name" placeholder="Package Name" id="pckg_name"
                                            class="form-control mb-2 @error('pckg_name') is-invalid @enderror"
                                            value="{{ isset($package->id) ? $package->name : old('pckg_%' ) }}">
                                        @error('pckg_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pckg_" class="form-label">Package Percentage</label>
                                        <input type="text" name="pckg_%" id="pckg_%" placeholder="Package %"
                                            class="form-control mb-2"
                                            value="{{ isset($package->id) ? $package->percentage : old('pckg_%') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="hashrate" class="form-label">Hash Rate</label>
                                        <input type="text" name="hashrate" id="hashrate" placeholder="Hash Rate"
                                            class="form-control mb-2"
                                            value="{{ isset($package->id) ? $package->hash_rate : old('pckg_%') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pckg_min_val" class="form-label">Min Value</label>
                                        <input type="text" name="pckg_min_val" id="pckg_min_val"
                                            placeholder="Package Min Value" class="form-control mb-2"
                                            value="{{ isset($package->id) ? $package->min_val : old('pckg_%') }}">
                                        @if (session()->has('error'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ session('error') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="pckg_max_val" class="form-label">Max Value</label>
                                        <input type="text" name="pckg_max_val" id="pckg_max_val"
                                            placeholder="Package Max Value" class="form-control mb-2"
                                            value="{{ isset($package->id) ? $package->max_val : old('pckg_%') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="duration" class="form-label">Duration</label>
                                        <input type="text" name="duration" id="duration" placeholder="Package Duration"
                                            class="form-control mb-2"
                                            value="{{ isset($package->id) ? $package->duration : old('pckg_%') }}">
                                    </div>
                                    <button type="submit" class="btn btn-secondary mt-2 mx-auto w-100 text-uppercase"
                                        style="letter-spacing: 1.5px">Add
                                        Package</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        @if(!isset($package->id))
                        <div class="card card-ody">
                            <table class="table table-bordered">
                                <thead class="bg-soft-orange">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Percentage</th>
                                        <th scope="col">Hash Rate</th>
                                        <th scope="col">Minimum value</th>
                                        <th scope="col">Maximum value</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $pk)
                                    <tr>
                                        <td>{{ $pk->name }}</td>
                                        <td>{{ $pk->percentage }}</td>
                                        <td>{{ $pk->hash_rate }}</td>
                                        <td>{{ $pk->min_val }}</td>
                                        <td>{{ $pk->max_val }}</td>
                                        <td>{{ $pk->duration }}</td>
                                        <td class="text-uppercase">
                                            <a href="{{ route('admin.packages.edit', $pk->id) }}"
                                                class="btn btn-sm btn-success">
                                                Edit
                                            </a>
                                            <a class="btn btn-sm btn-danger font-weight-bold"
                                                href="{{ route('admin.packages.delete', $pk->id) }}" onclick="event.preventDefault();
                                                document.getElementById('delete-package').submit();">
                                                Delete
                                            </a>
                                            <form id="delete-package"
                                                action="{{ route('admin.packages.delete', $pk->id) }}" method="POST"
                                                class="d-none">
                                                @csrf @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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