@extends('user.unifi.layouts.master')

@section('content')
    @include('user.unifi.partials.hero')
    {{-- @include('user.unifi.partials.slider') --}}
    @include('user.unifi.partials.get-offer')
    @include('user.unifi.partials.benefit')
    @include('user.unifi.partials.unifi-home')
    @include('user.unifi.partials.unifi-lite')
    @include('user.unifi.partials.unifi-biz')
    @include('user.unifi.partials.testimonial')
@stop
