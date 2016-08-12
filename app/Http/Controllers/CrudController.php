<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

use App\Http\Requests;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Crud::orderBy('id','DESC')->paginate(10);
       return view('show')->with('datas', $datas);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud/add');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                                    'caption' => 'required',
                                    'contents' => 'required',
                                 ]);
        $add = new Crud();
        $add->caption = $request['caption'];
        $add->contents = $request['contents'];
        $add->save();

        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Crud::find($id);
        return view('crud/show')->with('show',$show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showedit = Crud::where('id', $id)->first();
        return view('crud/edit')->with('showedit', $showedit);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Crud::where('id',$id)->first();
        $update->caption = $request['caption'];
        $update->contents = $request['contents'];
        $update->update();

        return redirect()->to('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Crud::find($id);
        $destroy->delete();

        return redirect()->to('/'); 
    }
}
