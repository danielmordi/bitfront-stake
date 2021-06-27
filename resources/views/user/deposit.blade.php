@extends('layouts.app')

@section('title')
    bfs | Deposit
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
                                <h4 class="mb-sm-0 font-size-18">Deposit</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-body" style="min-height: 300px">
                                <h3>Deposit instructions</h3>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <b class="text-warning">Step 1 </b>
                                        <span>Choose your plan</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b class="text-warning">Step 2 </b>
                                        <span>Add the amount you wish to deposit.</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b class="text-warning">Step 3 </b>
                                        <span>Then click on submit.
                                           <br> <b>Please Note:</b> your deposit will take 5 - 15mins for confirmation before reflecting on your
                                            dashboard.</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card" style="min-height: 300px">
                                <div class="card-body">
                                    @if (session('failed'))
                                        <div class="alert alert-danger">
                                            {{ session('failed') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('user.deposit.store') }}" method="post">
                                        @csrf
                                        <div class="mb-2">
                                            <label class="form-label">Choose Package</label>
                                            <select name="package" class="form-control select2
                                         @error('package') is-invalid @enderror">
                                                <option>Select</option>
                                                @foreach ($packages as $package)
                                                    <option value="{{ $package->id }}">{{ $package->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('package')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label">Choose a coin</label>
                                            <select name="coin" class="form-control select2
                                         @error('coin') is-invalid @enderror">
                                                <option>Select</option>
                                                @foreach ($coins as $coin)
                                                    <option value="{{ $coin->id }}">{{ $coin->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('coin')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="deposit_amount" class="form-label">Deposit Amount</label>
                                            <input type="text" name="deposit_amount"
                                                   pattern="^(\d*\.?\d+|\d{1,3}(,\d{3})*(\.\d+)?)$"
                                                   placeholder="0.00" class="form-control
                                         @error('deposit_amount') is-invalid @enderror">
                                            @error('deposit_amount')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn:s btn btn-primary mt-2 text-uppercase">submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Deposit Log
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-counter">
                                <thead>
                                <th>S/N</th>
                                <th>AMOUNT</th>
                                <th>DEPOSIT COIN</th>
                                <th>PACKAGE</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                                </thead>
                                <tbody>
                                @foreach ($logs as $log)
                                    <tr>
                                        <td></td>
                                        <td>{{ $log->amount }}</td>
                                        <td>{{ $log->coin->name }}</td>
                                        <td>{{ strtoupper($log->package->name) }}</td>
                                        <td>
                                            <div
                                                class="badge bg-{{ $log->status == 'completed' ? 'teal' : 'warning' }}">
                                                {{ $log->status }}
                                            </div>
                                        </td>
                                        <td>{{ $log->created_at->format('m-d-Y') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
