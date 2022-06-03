@extends('user.maxis.layouts.master', [
    'title' => 'home',
])

@section('content')
    @include('user.maxis.partials.hero')
    @include('user.maxis.partials.maxis-services')
    @include('user.maxis.partials.maxis-fibre')
    @include('user.maxis.partials.maxis-benefits')
    @include('user.maxis.partials.maxis-coveragecheck')


@stop
