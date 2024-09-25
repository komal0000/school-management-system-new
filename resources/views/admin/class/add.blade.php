@extends('admin.layout.app')
@section('jumbo')
    <a href="{{route('admin.class.index')}}">Classes</a> /
    <span>
        add
    </span>
@endsection
@section('content')
<div class="container shadow p-3 mt-2">
    <form action="{{route('admin.class.add')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Class Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary">
                    Add
                </button>
            </div>
        </div>

    </form>
</div>
@endsection
