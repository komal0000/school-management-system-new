@extends('admin.layout.app')
@section('jumbo')
    <a href="{{ route('admin.class.index') }}">Classes</a> /
    <span>
        edit </span>
@endsection
@section('content')
    <div class="shadow p-2 mt-2">
        <form action="{{ route('admin.class.edit', ['class_id' => $class->id]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Class Name</label>
                        <input type="text" name="name" id="name" value="{{ $class->name }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary">
                        Update
                    </button>
                </div>
            </div>

        </form>
    </div>
@endsection
