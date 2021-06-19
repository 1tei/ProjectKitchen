<?php

namespace App\Http\Controllers;


use App\models\RecipeModel;
use App\models\VideoModel;
use App\models\VideoCommentModel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!Auth::check()){
            return view ('main');
        }

        else {
            $Video = DB::table('Video')->get();
            return view('video', compact('Video'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('video_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $rules = array (
            'Title' => 'required|min:5',
            'Description' => 'required|min:10',
            'Video_link' => 'required|min:15',
        );

        $this->validate($request, $rules);

        $video = new VideoModel;
        $video->Author=$request->Author;
        $video->Title=$request->Title;
        $video->Description=$request->Description;
        $video->Video_link=$request->Video_link;
        $video->save();
        return redirect('/video');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Video = DB::table('Video')->where('id', '=', $id)->get();
        $Video_Comments = DB::table('Video')->join('Video_comments', 'Video.id', '=', 'Video_Comments.Post')->join('Users', 'Users.id', '=', 'Video_comments.Author')->where('Video.id', '=', $id)->get();
        return view('single_video', compact('Video', 'Video_Comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = VideoModel::findOrFail($id);
        return view('video_edit',compact('video'));
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
        $rules = array (
            'Title' => 'required|min:5',
            'Description' => 'required|min:10',
            'Video_link' => 'required|min:15',
        );

        $this->validate($request, $rules);

        $video = VideoModel::find($id);
        $video->Author=$request->Author;
        $video->Title=$request->Title;
        $video->Description=$request->Description;
        $video->Video_link=$request->Video_link;
        $video->save();
        return redirect('/video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        VideoCommentModel::where('Video_comments.Post', $id)->delete();
        VideoModel::findOrFail($id)->delete();
        return redirect('/video');
    }
}
