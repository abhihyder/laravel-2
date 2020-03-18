@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
       
        <a href="{{url('post/create')}}" class="btn btn-success">Add Post</a>   </div>
       
        <h2>Post List</h2>
        <hr>
 
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Category</th>
                <th>Title</th>
                <th>Status</th>
                <th>Created</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->user->name}}</td>
                <td>{{$data->category->name}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->status }}</td>
                <td>{{$data->created_at->format('F d, Y')}}</td>
                <!--<td>{{$data->created_at->diffForHumans()}}</td>-->
                <td>
                    <a class="btn btn-success" href="{{url('post/'.$data->id)}}">Details</a>            
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $posts->links() }} 
    </div>
</div>

@endsection