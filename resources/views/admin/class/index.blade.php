@extends('admin.layout.app')
@section('jumbo')
    <span>Classes</span>
@endsection
@section('btn')
<a href="{{route('admin.class.add')}}" class="btn btn-sm btn-primary"> Add</a>
@endsection
@section('content')
<div class="shaodw p-2 mt-2 rounded">
    <table class="table table-bordered">
        <thead>
            <th>SN</th>
            <th>Name</th>
            <th>Changes</th>
        </thead>
        <tbody>
            @foreach ($classes as $key=>$class)
            <td>
                {{$key+1}}
            </td>
            <td>{{$class->name}}</td>
            <td>
                <a href="{{route('admin.class.edit',['class_id'=>$class->id])}}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{route('admin.class.del',['class_id'=>$class->id])}}" class="btn btn-danger btn-sm">Del</a>
            </td>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
