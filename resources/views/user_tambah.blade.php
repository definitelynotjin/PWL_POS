@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Add User</h1>@stop

@section('content')

<div class="card-body">
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Username</label><input type="text" class="form-control" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label>Nama</label><input type="text" class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Password</label><input type="text" class="form-control" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label>ID Level</label><input type="text" class="form-control" placeholder="Enter ID Level">
                </div>
                <button type="submit" class="btn btn-info">Submit </button></div>
                @stop

                @section('css')
                <link rel="stylesheet" href="/css/admin_custom.css">
                @stop

                @section('js')
                <script> console.log("Hi, whats good");
                </script>
        </div>
    </form>
</div>
