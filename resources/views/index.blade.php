@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/indexData.css') }}">
@endsection

@section('content')
    <div id="root"></div>
@endsection

@section('script')
    <script type="module" src="{{ asset('assets/js/getIndexData.js') }}"></script>
@endsection
