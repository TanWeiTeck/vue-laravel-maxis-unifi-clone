@extends('user.layouts.master', [
    'title' => 'home',
])

@section('content')
    @include('user.partials.hero')
    @include('user.partials.maxis-services')
    @include('user.partials.maxis-fibre')
    @include('user.partials.maxis-benefits')
    @include('user.partials.maxis-coveragecheck')


@stop
