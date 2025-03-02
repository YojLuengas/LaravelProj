@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <h2>Student List</h2>

    <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter email" required>
    </div>
    <button type="submit" class="btn">Add Student</button>
</form>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table class="styled-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
