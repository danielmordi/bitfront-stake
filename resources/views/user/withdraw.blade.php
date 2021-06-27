@extends('layouts.app')

@section('title')
bfs | Withdraw
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
                            <h4 class="mb-sm-0 font-size-18">Withdrawal Request</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div style="min-height: 300px">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mini-stat">
                                        <span class="mini-stat-icon bg-purple me-0 float-end"><i
                                                class="ion ion-ios-wallet"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-purple">{{ Auth::user()->wallet_balance }}</span>
                                            Main Wallet Balance
                                        </div>
                                        <p class=" mb-0 mt-4 text-muted">Daily ROI <span class="float-end"><i
                                                    class="fa fa-caret-up me-1"></i>{{ $packages->percentage }}%</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="mini-stat">
                                        <span class="mini-stat-icon bg-brown me-0 float-end"><i
                                                class="ion ion-md-people"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-brown">{{ Auth::user()->bonus ?? '0.00' }}</span>
                                            Bonus
                                        </div>
                                        <p class="text-muted mb-0 mt-4">Total referral: {{ count(Auth::user()->referrals)  ?? '0' }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card" style="min-height: 300px">
                            <div class="card-body">
                                <form action="{{ route('user.withdraw.store') }}" method="post">
                                    @csrf
                                    <div class="mb-2">
                                        <label class="form-label">Choose Coin</label>
                                        <select class="form-control select2" name="coin" required>
                                            <option disabled selected>Select</option>
                                            @foreach ($coins as $coin)
                                            <option value="{{ $coin->id }}">{{ $coin->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Withdraw from(source)</label>
                                        <select class="form-control select2" name="withdraw_from" required>
                                            <option disabled selected>Select</option>
                                            <option value="wallet_balance">Wallet Balance</option>
                                            <option value="bonus">Bonus</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label for="wallet_id" class="form-label">Wallet id</label>
                                        <input type="text" name="wallet_id" value="{{ old('wallet_id') }}" class="form-control">
                                        <small>Please confirm that wallet address is correct. Funds sent to a wrong address cannot be <strong>Recovered</strong></small>
                                    </div>
                                    <div class="mb-2">
                                        <label for="amount" class="form-label">Withdrawal Amount</label>
                                        <input type="text" name="amount" value="{{ old('amount') }}" pattern="[0-9]+" placeholder="0.00" class="form-control">
                                    </div>
                                    <button type="submit" class="btn:s btn btn-primary text-uppercase">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Cash Outflow
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-counter">
                            <thead>
                                <th>S/N</th>
                                <th>AMOUNT</th>
                                <th>WALLET ID</th>
                                <th>COIN</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                            </thead>
                            <tbody>
                                @foreach ($withdrawals as $withdrawal)
                                <tr>
                                    <td></td>
                                    <td>{{ $withdrawal->amount }}</td>
                                    <td>{{ $withdrawal->wallet_id }}</td>
                                    <td>{{ $withdrawal->coin->name }}</td>
                                    <td class="text-uppercase">
                                        <div class="badge bg-warning p-2 font-weight-bolder" style="letter-spacing: 1.3px">
                                            {{ $withdrawal->status }}
                                        </div>
                                    </td>
                                    <td>{{ $withdrawal->created_at->format('m/d/Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination">
                            {{ $withdrawals->links('pagination::bootstrap-4') }}
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
@endsection
