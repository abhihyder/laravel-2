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
    
  

        <form action="{{route('register')}}" method="POST">
        @csrf 

            <div class="form-row">
                <div class="form-group col-md-6">
                <label>First Name</label>
                <input type="text" class="form-control" name="FirstName" >
                </div>
                <div class="form-group col-md-6">
                <label>Last Name</label>
                <input type="text" class="form-control" name="LastName" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Email</label>
                <input type="text" class="form-control" name="Email">
                </div>
                <div class="form-group col-md-6">
                <label >User Name</label>
                <input type="text" class="form-control" name="UserName" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Password</label>
                <input type="password" class="form-control" name="Password">
                </div>
                <div class="form-group col-md-6">
                <label >Confirm Password</label>
                <input type="password" class="form-control" name="Password_confirmation" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Gender</label>
                <select class="form-control" name="gndr">
                    <option selected>Male</option>
                    <option>Female</option>
                </select>
                </div>
                <div class="form-group col-md-6">
                <label>Date of Birth</label>
                <input type="date" class="form-control" name="brtdte" >
                </div>
            </div>
   
            
            <button type="submit" class="btn btn-primary"  name="register">Register</button>

        </form>
    </div>
</div>
@endsection