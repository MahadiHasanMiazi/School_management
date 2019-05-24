<div id="wrapper">
@extends('layout.side-bar')
<div id="page-wrapper">
    <div class="container-fluid">
        @if(session()->has('message.level'))
            <div class="alert alert-{{ session('message.level') }}">
                {!! session('message.content') !!}
            </div>
        @endif
        <!-- Page Heading -->
        <div class="row" id="main" >
            <div class="col-sm-12 col-md-12 well" id="content">
                <h1>Welcome Admin!</h1>
                <h2>Zaman Model Academy</h2>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
</div>