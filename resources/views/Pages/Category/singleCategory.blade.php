@extends('welcome')
@section('category')
<div class="container">
    <div class="row">
       
        <a href="{{url('category')}}" class="btn btn-success">All Category</a>   </div>
       
        <h2>Category Details</h2>
 
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

    </div>
</div>

@endsection