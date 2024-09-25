@extends('admin.layout.app')
@section('jumbo')
    <span>Students</span>
@endsection
@section('btn')
    <a href="{{ route('admin.student.add') }}" class="btn btn-sm btn-primary"> Add</a>
@endsection
@section('content')
    <div class="shaodw p-2 mt-2 rounded">
        <table class="table table-bordered">
            <thead>
                <th>SN</th>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>class</th>
                <th>Changes</th>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>{{ $student->name }}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->school_class_id}}</td>
                    <td>
                        <a href="{{ route('admin.student.edit', ['student_id' => $student->id]) }}"
                            class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ route('admin.student.del', ['student_id' => $student->id]) }}"
                            class="btn btn-danger btn-sm">Del</a>
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
