@extends('welcome')
@section('content')
<div class="container">
  <a href="{{url('category')}}" class="btn btn-success">All Category</a>
       <h3> Create new category</h3>
       <hr>
            <!-- Error massese-->
            @if ($errors->any())
                <div class="alert alert-danger col-md-8">
                    <ol>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ol>
                </div>
            @endif
    <div class="row">

        <form action="{{url('category')}}" method="post">
        @csrf
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" placeholder="Insert name" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label>Category Status</label>
                <select name="status" id="" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        
            <button type="submit" class="btn btn-success">Create</button>
            <button type="reset" class="btn btn-info">Reset</button>
        </form>
    </div>
</div>

@endsection