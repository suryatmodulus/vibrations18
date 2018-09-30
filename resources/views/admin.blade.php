@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/admin/export"><button class="btn btn-primary">Export All</button></a>
                    <a href="/admin/exportsheets"><button class="btn btn-primary">Export Sheets</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
