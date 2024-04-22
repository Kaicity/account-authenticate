@extends('layout')
@section('title', 'Login account')
@section('content')
    <div class="container pt-3 mt-5 py-5 border border-2 rounded-4" style="max-width: 30%;">
        <div class="mt-3 mx-auto" style="max-width: 500px">
            <h2>Đăng nhập</h2>
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if (session()->has('error'))
                {{-- <div class="alert alert-danger">{{ session('error') }}</div> --}}
                <script>
                    $(document).ready(function () {
                        // Trigger the modal
                        $('#exampleModal').modal('show');

                    });
                </script>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <form style="max-width: 500px; margin: 0 auto;" action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
    @include('include.modal-message')
@endsection
