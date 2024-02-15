@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Contract</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">  
<link rel="stylesheet" href="style.css">

<div class="container">
        <h>Contracts</h>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Sub Modules</th>
                <th>Date</th>
                <th>Files</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Jeyp </td>
                <td>User</td>
                <td>Calendar</td>
                <td>2024-02-14</td>
                <td>Sample</td>
                <td>Pending</td>
            </tr>
            <tr>
            <td>Nyaps</td>
                <td>User</td>
                <td>Calendar</td>
                <td>2024-02-16</td>
                <td>Sample</td>
                <td>Pending</td>
            </tr>
            <tr>
            <td>Jhonnell</td>
                <td>User</td>
                <td>Calendar</td>
                <td>2024-02-18</td>
                <td>Sample</td>
                <td>Pending</td>
            </tr>
            <tr>
            <td>Lion</td>
                <td>User</td>
                <td>Calendar</td>
                <td>2024-02-19</td>
                <td>Sample</td>
                <td>Pending</td>
            </tr>
            
        </tfoot>
    </table>

    </div>



    <script src="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>


@endsection


@section('script')
@endsection
