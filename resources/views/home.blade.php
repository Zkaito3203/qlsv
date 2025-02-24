@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Trang chủ</h1>
    <p>Chào mừng bạn đến với hệ thống quản lý sinh viên.</p>
    <div class="list-group">
        <a href="{{ route('students.index') }}" class="list-group-item list-group-item-action">Quản lý sinh viên</a>
        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Đăng xuất
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
@endsection
