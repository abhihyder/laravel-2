@extends('welcome')

@section('content')
<div class="container">
            <!-- Error massese-->
            @if ($errors->any())
                <div class="alert alert-danger col-md-8">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <h3>Register your name</h3>
    <hr>
    <div class="row">
    
  

        <form enctype="multipart/form-data" action="{{url('register')}}" method="POST">
        @csrf 

            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Full Name</label>
                <input type="text" class="form-control" value="{{old('name')}}" name="name" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Email</label>
                <input type="text" class="form-control" value="{{old('Email')}}" name="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                <label >User Name</label>
                <input type="text" class="form-control" value="{{old('UserName')}}" name="UserName" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Password</label>
                <input type="password" class="form-control" name="Password">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                <label >Confirm Password</label>
                <input type="password" class="form-control" name="Password_confirmation" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Gender</label>
                <select class="form-control" name="gndr">
                    <option value="Male" @if(old('gndr') == 'Male') selected @endif>Male</option>
                    <option  value="Female"  @if(old('gndr') == 'Female') selected @endif>Female</option>
                    <option  value="Others"  @if(old('gndr') == 'Others') selected @endif>Others</option>
                </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Date of Birth</label>
                <input type="date" class="form-control" value="{{old('brtdte')}}" name="brtdte" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Upload Photo</label>
                <input type="file" class="form-control" name="Photo">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary"  name="register">Register</button>

        </form>

    </div>
    <br>
</div>
@endsection