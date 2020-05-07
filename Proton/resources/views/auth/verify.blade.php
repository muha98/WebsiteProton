@extends('layouts/app')

@section('title','Login')

@section('container1')
<div class="container">
  <div class="row">
    <div class="col-10">
    <h1 class="display-4">Login PROTON</h1>
    </div>
  </div>
</div>
 @endsection 

 @section('container2')
 <div class="container">
 <div class="col-10" style="margin-top: 140px; margin-left: 20px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection 
