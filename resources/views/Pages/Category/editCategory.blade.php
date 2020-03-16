@extends('welcome')
@section('category')
<div class="container">
  <a href="{{url('category')}}" class="btn btn-success">Back</a>
       <h3> Edit category</h3>
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

        <form action="{{url('category/'.$categories->id)}}" method="post">
        @csrf
        @method('PUT')

           
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" placeholder="Insert name" name="name" value="{{$categories->name}}">
            </div>
            <div class="form-group">
                <label>Category Status</label>
                <select name="status" id="" class="form-control">
                    <option value="1" @if($categories->status == 1) selected @endif>Active</option>
                    <option value="0" @if($categories->status == 0) selected @endif>Inactive</option>
                </select>
            </div>
        
            <button type="submit" class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-info">Reset</button>
        </form>
    </div>
</div>

@endsection