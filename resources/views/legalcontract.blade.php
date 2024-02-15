@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<table class="display" id="basic-2">
<thead>
  <tr>
    <th>Name</th>
    <th>Position</th>
    <th>Office</th>
    <th>Age</th>
    <th>Start date</th>
    <th>Salary</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Tiger Nixon</td>
    <td>System Architect</td>
    <td>Edinburgh</td>
    <td>61</td>
    <td>2011/04/25</td>
    <td>$320,800</td>
  </tr>
  <tr>
    <td>Garrett Winters</td>
    <td>Accountant</td>
    <td>Tokyo</td>
    <td>63</td>
    <td>2011/07/25</td>
    <td>$170,750</td>
  </tr>
</tbody>
</table>
    <script type="text/javascript">
        var session_layout = '{{ session()->get('layout') }}';
    </script>
    <script src="{{ asset('assets/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/datatable/datatable/datatables/datatable.custom.js') }}"></script>

@endsection

@section('script')
@endsection
