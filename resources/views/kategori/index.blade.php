@extends('layout.app')

{{-- customize layout section --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
            <div class="card-body">
                <a href="{{ url('kategori/create') }}" class="btn btn-primary mb-2">Add Category</a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
