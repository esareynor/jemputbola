@extends('layouts/app')
@section('styles')
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
@endsection
@section('content')
    @foreach ($data['role'] as $r)
        @if (Auth::user()->id == $r->id_user)
            @if ($r->id_role == 1)
                @include('pages/dashboard/dashboard_admin')
            @endif
            @if ($r->id_role == 2)
                @include('pages/dashboard/dashboard_staff')
            @endif
            @if ($r->id_role == 3)
                @include('pages/dashboard/dashboard_user')
            @endif
        @endif
    @endforeach
@endsection
@section('js')
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
@endsection
