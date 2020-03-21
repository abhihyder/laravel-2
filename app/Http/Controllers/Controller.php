<?php

namespace App\Http\Controllers;
use App\Models\Post; 
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $sql['articles']= Post::with('category', 'user')->select('id','user_id', 'category_id', 'title', 'status', 'created_at')->orderBy('created_at', 'desc')->take(5)->get();
        return view('Pages.index', $sql);
    }
}
