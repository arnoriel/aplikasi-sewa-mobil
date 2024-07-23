@extends('layout.template')
@section('title', 'home - Rent car')

@section('content')
@include('layout.card')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            @livewire('UsersComponent')
        </div>
    </div>
@endsection
