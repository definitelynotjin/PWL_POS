@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Add Level</h1>@stop

@section('content')

<div class="card-body">
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Level Code</label><input type="text" class="form-control" placeholder="Enter Code">
                </div>
                <div class="form-group">
                    <label>Level Nama</label><input type="text" class="form-control" placeholder="Enter Name">
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
