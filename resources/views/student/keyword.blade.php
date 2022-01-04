@extends('layout.dashboard')
@push('styles')
    @livewireStyles
@endpush
@section('header')
    <h2 class="display-5 col-md-10 col-lg-10">Keywords List</h2>
@endsection
@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('student.index')}}">Archives</a></li>
      <li class="breadcrumb-item active" aria-current="page">Keywords</li>
    </ol>
</nav>
@endsection
@section('contents')
    <livewire:keyword-search/>
@endsection
@push('scripts')
    @livewireScripts
@endpush