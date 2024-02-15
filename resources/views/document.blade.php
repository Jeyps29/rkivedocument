@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>My Drive</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('breadcrumb-title')

@section('content')
<div class="card">
 <div class="card-body">

    
 
    <p>Folder</p>

    <div class="row">
        <div class="col-4">
            <a href="">
            <div class="card p-1">
                <h5><i class="icofont icofont-folder px-3"></i> test</h5>
                
            </div>
            </a>
        </div>
    </div>
    
    <p>Files</p>

    <div class="row">
        <div class="col-4">
            <div class="card p-1">
                <h5><i class="icofont icofont-folder px-3"></i> test</h5>
            </div>
            
            
        </div>
        
    </div>

 </div>
</div>

@endsection

    <script type="text/javascript">
        var session_layout = '{{ session()->get('layout') }}';
    </script>
    <script src="{{ asset('assets/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/datatable/datatable/datatables/datatable.custom.js') }}"></script>

@endsection

@section('script')
@endsection
