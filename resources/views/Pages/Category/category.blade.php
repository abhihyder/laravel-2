@extends('welcome')
@section('category')
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->slug}}</td>
                <td>{{$data->status == 1 ? 'Active' : 'Inactive'}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('category/'.$data->id)}}">Details</a>
                    <a class="btn btn-info" href="{{url('category/'.$data->id.'/edit')}}">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
</div>

@endsection