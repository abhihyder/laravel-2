@extends('welcome')
@section('category')
<div class="container">
    <div class="row">
        <form>
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" placeholder="Insert name" name="name">
            </div>
            <div class="form-group">
                <label>Category Slug</label>
                <input type="text" class="form-control"  placeholder="Insert slug" name="slug">
            </div>
        
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

@endsection