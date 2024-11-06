@extends('dashboard.admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header d-none d-md-block d-lg-block">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">{{ $admin->email }}</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"
                                                aria-hidden="true"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">{{ $title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div> <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12 col-md-8  col-lg-8 pb-3">
                        <form action="{{ route('admin.card.update', $card->uuid) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">Name on card</label>
                                <input type="text" name="name" id="" class="form-control"
                                    value="{{ $card->name }}" aria-describedby="helpId" />
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Card Number</label>
                                        <input type="text" name="number" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId" />
                                        @error('number')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Card Balance</label>
                                        <input type="text" name="balance" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId" />
                                        @error('balance')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Expiry date</label>
                                <input type="date" class="form-control" name="date" id="">
                                @error('date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">CVV</label>
                                <input type="text" name="cvv" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                                @error('cvv')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Card Type</label>
                                        <select class="form-control" name="type" id="">
                                            @foreach ($cardTypes as $key => $cardType)
                                                <option value="{{ $cardType->value }}">{{ $cardType->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Card Status</label>
                                        <select class="form-control" name="status" id="">
                                            <option value="0">Declined</option>
                                            <option value="1">Approved</option>
                                        </select>
                                        @error('status')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3 mx-3">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                            Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
