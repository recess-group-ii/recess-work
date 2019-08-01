@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Agent')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Agent Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('agents.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post" action="{{route('agents.store')}}" autocomplete="off">
                            @csrf
                            
                           
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('fName') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-fName">{{ __('First name') }}</label>
                                    <input type="text" name="fName" id="input-fName" class="form-control form-control-alternative{{ $errors->has('fName') ? ' is-invalid' : '' }}" value="{{ old('fNname') }}" required autofocus>

                                    @if ($errors->has('fName'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fName') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('lName') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-lName">{{ __('Last Name') }}</label>
                                    <input type="text" name="lName" id="input-lName" class="form-control form-control-alternative{{ $errors->has('lName') ? ' is-invalid' : '' }}" value="{{ old('lName') }}" required autofocus>

                                    @if ($errors->has('lName'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lName') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-gender">{{ __('Gender') }}</label>
                                    <input type="text" name="gender" id="input-gender" class="form-control form-control-alternative{{ $errors->has('gender') ? ' is-invalid' : '' }}" value="{{ old('gender') }}" required autofocus>

                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                    <input type="text" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" required autofocus>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('signature') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Signature') }}</label>
                                    <input type="text" name="signature" id="input-signature" class="form-control form-control-alternative{{ $errors->has('signature') ? ' is-invalid' : '' }}" value="{{ old('signature') }}" required autofocus>

                                    @if ($errors->has('signature'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('signature') }}</strong>
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