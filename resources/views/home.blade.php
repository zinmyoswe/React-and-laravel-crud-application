@extends('layouts.app')

@section('content')
<style type="text/css">
    body{
        background-color: #fff;
    }
    .float-right {
    float: right !important;
    margin-right: 4px;
}
</style>
<div class="container">
    <div id="root">
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
        </div>{{--  root end --}}
</div>
@endsection
