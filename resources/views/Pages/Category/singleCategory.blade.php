@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
       
        <a href="{{url('category')}}" class="btn btn-success">All Category</a>   </div>


       <!-------------------------Category details------------------ -->
       <br>
        <h2>Category Details</h2>
        <hr>
 
        <p>ID : {{$categories->id}}</p>
        <p> Name : {{$categories->name}}</p>
        <p>Slug : {{$categories->slug}}</p>
        <p>Status : {{$categories->status == 1 ? 'Active' : 'Inactive'}}</p>
        <p>Create Time : {{$categories->created_at}}</p>

        <form action="{{url('category/'.$categories->id)}}" method="post" onclick="return confirm('Are you sure you want to delete this item?');">
            @csrf 
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    
    <!-------------------------one to many join data looping------------------ -->
    <br>
        <div>
            <h2>Posts under "{{$categories->name}}" category</h2>
            <hr>
            
            <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories->posts as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->user->name}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->status }}</td>
                <td>
                    <a class="btn btn-success" href="{{url('post/'.$data->id)}}">Details</a>
                    <a class="btn btn-info" href="{{url('post/'.$data->id.'/edit')}}">Edit</a>
            
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>


    </div>
</div>

@endsection