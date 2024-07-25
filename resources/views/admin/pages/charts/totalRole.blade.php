@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Total Roles Chart</h1>
    <canvas id="totalRoleChart" width="400" height="200"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/admin/totalRole.js') }}"></script>
@endsection
