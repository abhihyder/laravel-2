@extends('welcome')

@section('content')

<div class="container">

    <br>
    
    <h3>Welcome to Laravel tutorial</h3>
        <hr>
            @foreach($articles as $data)
            
                <h5>{{$data->title}}</h5>
                <p>{{$data->content}}</p>
                <p>
                    <a href="">{{$data->created_at->format('F d, Y')}}</a>
                    by <a href="">{{$data->user->name}}</a>
                    on <a href="">{{$data->category->name}}</a>
                </p>
                <!--<td>{{$data->created_at->diffForHumans()}}</td>-->
            @endforeach
            <hr>
</div>
@endsection