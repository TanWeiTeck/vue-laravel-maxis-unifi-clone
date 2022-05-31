@extends('admin.layouts.master')

@section('content')
    <div class="bg-light rounded p-5">
        <h1 class="pb-3 text-center text-3xl font-light">Admin Dashboard</h1>

        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        Before proceeding, please check your email for a verification link. If you did not receive the email,
        <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="">
                click here to request another
            </button>.
        </form>
    </div>
@endsection
