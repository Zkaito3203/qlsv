@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách sinh viên</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Thêm sinh viên</a>
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Ngày sinh</th>
            <th>Khóa học</th>
            <th>Hành động</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->dob }}</td>
            <td>{{ $student->course }}</td>
            <td>
                <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection