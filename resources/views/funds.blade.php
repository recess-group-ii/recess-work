@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Funds Registration')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Register Funds') }}</h3>
                            </div>
    
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/create" autocomplete="off">
                            @csrf
                        
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('donor') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-donor">{{ __('Donor') }}</label>
                                    <input type="text" name="donor" id="input-donor" class="form-control form-control-alternative{{ $errors->has('donor') ? ' is-invalid' : '' }}" value="{{ old('donor') }}" required autofocus>

                                    @if ($errors->has('donor'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('donor') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">{{ __('Amount') }}</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative{{ $errors->has('amount') ? ' is-invalid' : '' }}" value="{{ old('amount') }}" required autofocus>

                                    @if ($errors->has('amount'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-date">{{ __('Date') }}</label>
                                    <input type="date" name="date" id="input-date" class="form-control form-control-alternative{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date') }}" required autofocus>

                                    @if ($errors->has('date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('receiver') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-receiver">{{ __('Received by') }}</label>
                                    <input type="text" name="receiver" id="input-receiver" class="form-control form-control-alternative{{ $errors->has('receiver') ? ' is-invalid' : '' }}" value="{{ old('receiver') }}" required autofocus>

                                    @if ($errors->has('reciever'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('receiver') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection