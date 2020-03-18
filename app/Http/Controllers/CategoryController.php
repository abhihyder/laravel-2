<?php

namespace App\Http\Controllers;
use App\Models\Category; // Have to include this directory line
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$sql['categories']= Category::all(); // for data
        $sql['categories']= Category::select('id','name', 'slug', 'status')->orderBy('id', 'desc')->paginate(5); // for paginate data
        //$sql['categories']= Category::select('id','name', 'slug', 'status')->orderBy('id', 'desc')->get(); // for selected data
        //$sql['categories']= Category::select('id','name', 'slug', 'status')->where('status', 0)->get(); // for conditional query
        return view('Pages.Category.category', $sql);
    //    return response()->json($sql);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages.Category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
       
        $validator = Validator::make($request->all(), [
            'name'   => 'required |unique:categories,name| min:3',
        ]);

        if ($validator->fails()) {
            return redirect('category/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data=[
            'name'  => $request->name,
            'slug'  => Str::slug($request->name),
            'status'=> $request->status

        ];
       
       Category::create($data);

       
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sql['categories']= Category::with('posts', 'posts.user')->select('id','name', 'slug', 'status', 'created_at')->find($id); // one to many Relationship
        return view('Pages.Category.singleCategory', $sql);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sql['categories']= Category::select('id','name', 'status', )->find($id);
        return view('Pages.Category.editCategory', $sql);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            //validation
       
            $validator = Validator::make($request->all(), [
                'name'   => 'required | min:3|unique:categories,name,'.$id,
            ]);
    
            if ($validator->fails()) {
                return redirect('category/'.$id.'/edit')
                            ->withErrors($validator)
                            ->withInput();
            }
    
            $data=[
                'name'  => $request->name,
                'slug'  => Str::slug($request->name),
                'status'=> $request->status
    
            ];

            $cat=Category::find($id); //fetch data
            $cat->update($data); // Update data


           //return response()->json($data);
           
           return redirect('category/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $cat= Category::find($id); //fetch data
       $cat->delete(); // Data delete
       return redirect('category');
    }
 
}
