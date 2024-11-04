@extends('dashboard.user.layouts.master')
@section('content')
    <div class="content-wrapper bg-navy" style="min-height: 697px;">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header d-none d-md-block d-lg-block">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">My account</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"
                                                aria-hidden="true"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page"><?= $title ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div> <!-- Main content -->
            <section class="content">
                <!-- Basic Card Example -->
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="shadow mb-4 border-bottom-success">
                            <div class="card-header py-3 d-flex justify-content-between">
                                @include('dashboard.user.partials.balance_and_currency')

                                @include('dashboard.user.partials.menu')
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-7">
                                    <div class="card-header mb-3">
                                        <h4>User deposit</h4>
                                        <p>Deposit history</p>
                                    </div>
                                    <div class="list-group">
                                        @forelse ($deposits as $deposit)
                                            <a href="{{ route('user.deposit.show', $deposit->uuid) }}"
                                                class="list-group-item list-group-item-action {{ $deposit->status != 1 ? 'text-danger' : 'text-success' }}">
                                                <span
                                                    class="badge {{ $deposit->status != 1 ? 'bg-danger' : 'bg-success' }} text-white float-right">{{ $deposit->status != 1 ? 'PENDING' : 'CONFIRMED' }}</span>
                                                <h5 class="m-0 p-0">
                                                    <span
                                                        class="{{ $deposit->status != 1 ? 'text-danger' : 'text-success' }} ">
                                                        {{ currency($user->currency) . formatAmount($deposit->amount) }}
                                                        <small>{{ currency($user->currency, 'name') }}</small>
                                                </h5>
                                                <p class="m-0 p-0">
                                                    Payment with {{ $deposit->method }} <br>
                                                    Transaction ID: {{ $deposit->reference_id }} </p>
                                                <small class="float-right">
                                                    Date: {{ date('dS M,Y', strtotime($deposit->date)) }}
                                                </small>
                                            </a>
                                        @empty
                                            <h5>Deposit history</h5>
                                            <div class="alert alert-warning" role="alert">
                                                No deposit record found
                                            </div>
                                        @endforelse

                                    </div>

                                    <div class="card-footer">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    @include('dashboard.user.partials.personal_account_details')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
