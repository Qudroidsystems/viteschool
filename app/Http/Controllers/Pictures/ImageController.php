<?php

namespace App\Http\Controllers\Pictures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pictures\ImageModel;

class ImageController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:staff-picture-upload', ['only' => ['index','store']]);
         $this->middleware('permission:staff-picture-upload', ['only' => ['create','store']]);
         $this->middleware('permission:staff-picture-upload', ['only' => ['edit','update']]);

    }

    public function index()
    {
        //
    }


     public function imageUploadPost(Request $request)
    {

        $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/staffpics'), $imageName);
        $id = $request->post('id');

        /* Store $imageName name in DATABASE from HERE */

        ImageModel::where("staffId", $id)->update(["picture" => $imageName]);
        return back() ->with('success','You have successfully uploaded Picture.');
                      //->with('image',$imageName);

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
