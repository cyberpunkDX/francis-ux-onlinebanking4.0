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
                        <div class="card shadow mb-4 border-bottom-success">
                            <div class="card-header py-3 d-flex justify-content-between">
                                @include('dashboard.user.partials.balance_and_currency')
                                @include('dashboard.user.partials.menu')
                            </div>
                            <div class="row bg-navy">
                                <div class="col-sm-12 col-md-7 bg-navy">
                                    @include('partials.validation_message')
                                    @include('partials.email_message')
                                    <div class="card-header flex-column align-items-left">
                                        <h4>Transfer details</h4>
                                    </div>
                                    <div class="card-body bg-navy">
                                        @if ($transfer->status == 0)
                                            <span class="badge badge-danger float-right">PENDING</span>
                                        @elseif($transfer->status == 1)
                                            <span class="badge badge-success float-right">APPROVED</span>
                                        @elseif($transfer->status == 2)
                                            <span class="badge badge-danger float-right">FAILED</span>
                                        @endif
                                        <h5 class="m-0 p-0"><span
                                                class="text-primary">{{ currency($user->currency) . formatAmount($transfer->amount) }}</span>
                                            <small>{{ currency($user->currency, 'name') }}</small>
                                        </h5>
                                        <p class="m-0 p-0">{{ $transfer->type }}</p>
                                        <small class="float-right">
                                            Date: {{ date('dS M,Y', strtotime($transfer->created_at)) }} </small>
                                        <h5>Beneficiary information's</h5>
                                        @if ($transfer->type == 'Electronic Transfer')
                                            <dl class="row">
                                                <dt class="col-sm-3">{{ $transfer->withdrawal_method }}:</dt>
                                                <dd class="col-sm-9">{{ $transfer->beneficiary }}</dd>
                                            </dl>
                                        @else
                                            <dl class="row">
                                                <dt class="col-sm-3">Bank name:</dt>
                                                <dd class="col-sm-9">{{ $transfer->bank_name }}</dd>
                                                <dt class="col-sm-3">Account name:</dt>
                                                <dd class="col-sm-9">{{ $transfer->account_name }}</dd>
                                                <dt class="col-sm-3">Account number:</dt>
                                                <dd class="col-sm-9">{{ $transfer->account_number }}</dd>
                                            </dl>
                                        @endif

                                    </div>
                                    <div class="card-footer">
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('user.transfer.print', $transfer->uuid) }}"
                                                    class="btn btn-success btn-sm">PRINT</a>
                                            </div>
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
