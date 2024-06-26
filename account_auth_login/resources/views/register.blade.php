@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="container">
        <form style="width: 500px" class="mx-auto">
            <div class="mb-3">
                <label class="form-label">Tên đầy đủ</label>
                <input type="email" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </form>
    </div>
@endsection
