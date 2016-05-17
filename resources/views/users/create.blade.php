@extends("layouts.main")

@section("contents")
    <div class="container theme-showcase" role="main">
        <div class="page-header">
            <h1>Users <small>Create user</small></h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include("users._partial.form")
            </div>
        </div>
    </div>
@stop