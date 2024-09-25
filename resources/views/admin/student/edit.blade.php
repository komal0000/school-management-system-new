@extends('admin.layout.app')

@section('jumbo')
    <a href="{{ route('admin.student.index') }}">Students</a> /
    <span>Edit</span>
@endsection

@section('content')
    <div class="container shadow p-3 mt-2">
        <form action="{{ route('admin.student.edit', ['student_id' => $student->id]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}"
                            required>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control"
                            value="{{ $student->address }}" required>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ $student->email }}" required>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control"
                            value="{{ $student->phone }}" required>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" class="form-control" value="{{ $student->age }}"
                            required>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="class">Class</label>
                        <select name="class_id" id="class" class="form-control" required>
                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}"
                                    {{ $student->class_id == $class->id ? 'selected' : '' }}>
                                    {{ $class->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary">Update Student</button>
                </div>
            </div>
        </form>
    </div>
@endsection
