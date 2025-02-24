@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Thêm sinh viên</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Ngày sinh:</label>
            <input type="date" name="dob" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Khóa học:</label>
            <input type="text" name="course" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection
