@extends('dashboard.user.layouts.master')
@section('content')
<div class="content-wrapper bg-gradient-blue">
    {{-- @if (1 == 1)
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="px-4 py-4">
                        <div class="d-flex justify-content-between">
                            <div class="d-none d-sm-none">
                                <img height="100px" src="{{ asset('dash-asset/images/kyc-verify.png') }}" alt="">
                            </div>
                            <div>
                                <div class="">
                                    <h4>Secure your account</h4>
                                    <p>Setup your 4-digit PIN. This helps protect your account and ensures that only you
                                        can access sensitive features.</p>
                                    <a href="/">
                                        <button class="btn btn-primary">Get started</button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-10">
                <!-- menu, date & IP -->
                <div class="d-flex align-items-center">
                    <div class="rounded-3 p-2 bg-navy mr-2">
                        <i class="fas fa-box text-white"></i>
                    </div>

                    <!-- ip & date -->
                    <div class="ms-2 fw-bold text-success">
                        <span> LOGIN IP: {{ request()->ip() }} </span>
                        <span> Date: {{ now() }}</span>
                    </div>
                </div>
            </div>

            <div class="col-7 col-xl-3">
                <div class="w-100 mt-4">
                    <i class="fa fa-user display-6"></i>
                    <p class="text-secondary text-white">Welcome <span class="text-light fw-bold"> /
                            <?= $user->first_name. " ". $user->last_name ?></span></p>
                    <h4>Let's see your statistics</h4>
                    <i class="bx bx-user"></i>
                </div>
            </div>

            <div class="col-5 col-xl-4">
                <div class="card p-2">
                    <div class="d-flex justify-content-between w-100 h-25">
                        <div>
                            <small class="text-secondary">your</small>
                            <p class="fw-bold text-light">Virtual card</p>
                        </div>

                    </div>
                    <p class="fw-bold display-6">
                        {{ $user->card ? currency($user->currency) . formatAmount($user->card->balance) : "00" }}
                    </p>
                    <p class="fw-bold">{{ $user->card ? $user->card->number : "********" }}</p>
                    <div class="d-flex justify-content-between">
                        <small><span class="fw-bold"></span> {{ $user->card ? $user->card->date : "00/00"  }}</small>
                        <small><span class="fw-bold"></span>{{ $user->card ? $user->card->cvv : "***"  }}</small>
                    </div>
                </div>
            </div>

            <div class="col-5 col-xl-2 justify-content-center align-items-center my-auto">
                <a href="{{ route('user.transfer.fund') }}">
                    <div class="rounded bg-navy p-2">
                        <div class="p-1">
                            <div class="d-flex justify-content-between">
                                <i class="fa fa-rocket display-6"></i>
                                <div class="border-start px-2">
                                    <h4 class="fw-bold text-light mt-2">Send</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-7 col-xl-3 my-auto">
                <div class="rounded bg-navy p-2">
                    <small class="text-secondary">Total balance</small>
                    <div class="px-2">
                        <h4 class="fw-bold">
                            {{ currency($user->currency) . formatAmount($user->balance) }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-navy text-light mt-4 rounded" style="max-height: 70%">
            <div class="col-lg-12 p-2">
                <h4 class="fw-bold m-4">Transactions</h4>
                <div class="">
                    <div class="mt-2" style="max-height: 400px; overflow-y: auto;">
                        @forelse ($transactions as $transaction)
                        <a href="{{ route('user.transaction.show',$transaction->uuid) }}">
                            <div class="row mt-2 h-100" style="border-bottom: 1px solid rgb(181, 179, 179);">
                                <div class="col-8">
                                    <div class="d-flex">
                                        <div class="mx-2 d-flex justify-content-center align-items-center">
                                            <i class="fa fa-arrow-up display-6 text-success mx-2"></i>
                                        </div>
                                        <div class="">
                                            <p class="fw-bold text-light">
                                                {{ $transaction->description }}
                                            </p>
                                            <small>{{ $transaction->date }}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mt-3">
                                    <small class="mx-2 fw-bold text-light"> - {{ currency($user->currency) . formatAmount($transaction->amount) }}</small>
                                    <small class="text-warning">pending</small>
                                </div>
                            </div>
                        </a>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
