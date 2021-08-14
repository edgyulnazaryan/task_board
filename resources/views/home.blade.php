@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                @include('time')
            </div>
        </div>
    </div>
</div>
@endsection
