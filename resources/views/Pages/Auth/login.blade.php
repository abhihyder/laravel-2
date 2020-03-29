@extends('welcome')

@section('content')
<div class="container">
    <br>
    <a class="btn btn-success" href="{{url('register/create')}}">Sign up</a>
    <br>


    <h3>Login to your profile</h3>
    <hr>
    
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
    <div class="row">
    
  

        <form  action="{{url('login')}}" method="POST">

        @csrf 
            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Email</label>
                <input type="text" class="form-control" value="{{old('email')}}" name="email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
                </div>
            </div>
           
            
            <button type="submit" class="btn btn-primary"  name="login">Login</button>

        </form>

    </div>
    <br>
</div>
@endsection