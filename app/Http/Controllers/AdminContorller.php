<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use App\Models\Artist;
class AdminContorller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('CheckAdmin');
    }
    public function index()
    {
        return view("adminpanel.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_artists()
    {
        return view("adminpanel.artists.index");
    }
    public function create_artists()
    {
        return view("adminpanel.artists.create");
    }
    public function store_artists(Request $request)
    {
        $this->validate($request,[
            "name"=>"required|string|max:56",
            "description"=>"required",
            "birthday"=>"required|date",
            "gender"=>"required|min:0|max:1",
            'image' => "required|image|mimes:jpeg,png,jpg",

        ]
        );
        if(Input::file('image')){
            $this->validate($request, [
                'image' => "image|mimes:jpeg,png,jpg",
            ]);
            $destinationPath = public_path('uploads/artists'); 
            $fileName = uniqid().'.jpg';
            Input::file('image')->move($destinationPath, $fileName);
        } 
        else{
            $this->validate($request, [
                'image' => "required|image|mimes:jpeg,png,jpg",
            ]);
        }
        Artist::create([
            "name"=>$request->input("name"),
            "description"=>$request->input("description"),
            "gender"=>$request->input("gender"),
            "birthday"=>$request->input("birthday"),
            "image"=>$fileName,
        ]);
    }
    public function categorylist($value='')
    {
        return view("adminpanel.category.index",["cats"=>Category::orderBy("created_at","DESC")->get()]);
    }
    public function categorydelete($id)
    {
        Category::where("id",$id)->delete();
        return 1;
    }
    public function categorystore(Request $request)
    {
        
        $cat=Category::create(
            $this->validate($request,[
                "name"=>"required|max:56|string|unique:categories"
            ])
        );
        return [
            "status"=>"success",
            "newcat"=>["id"=>$cat->id,"name"=>$cat->name]
        ];
    }
    public function categoryupdate(Request $request)
    {
        
        $cat=Category::where("id",$request->input("id"))->update(
            $this->validate($request,[
                "id"=>"required|numeric",
                "name"=>"required|max:56|string"
            ])
        );
        return [
            "status"=>"success",
        ];
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
