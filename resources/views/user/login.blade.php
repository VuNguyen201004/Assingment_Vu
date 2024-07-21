@extends('layout.admin')

@section('content')
<h2>Login</h2>
    <a href="{{ route('register') }}">
        <button class="btn btn-success">Đăng Ký Ngay</button>
    </a>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" unrequired>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" unrequired>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection