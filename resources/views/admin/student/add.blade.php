@extends('admin.layout.app')

@section('jumbo')
    <a href="{{ route('admin.student.index') }}">Students</a> /
    <span>Add</span>
@endsection

@section('content')
    <div class="container shadow p-3 mt-2">
        <form action="{{ route('admin.student.add') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone" class="form-control no-spinners" required>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" class="form-control no-spinners" required>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="class">Class</label>
                        <select name="class_id" id="class" class="form-control" required>
                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <button class="btn btn-primary">Add Student</button>
                </div>
            </div>
        </form>
    </div>
@endsection
