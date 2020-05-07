@extends('layouts/app')

@section('title','Staff')


 @section('container2')
 <div class="container">
 <div class="col-10" style="margin-top: 80px; margin-left: 20px; margin-bottom: 365px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 @endsection 