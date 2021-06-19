<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\RecipeModel;
use App\models\IngredientModel;
use App\models\RecipeRatingModel;
use App\models\VideoCommentModel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class VCommentController extends Controller
{
        public function show($id)
        {
            if (!Auth::check()){
                return view ('main');
            }
            else {
                $Video = DB::table('Video')->where('id', '=', $id)->get();
                $Video_Comments = DB::table('Video')->join('Video_comments', 'Video.id', '=', 'Video_Comments.Post')->join('Users', 'Users.id', '=', 'Video_comments.Author')->where('Video.id', '=', $id)->get();
                return view('single_video', compact('Video', 'Video_Comments'));
            }
        }

        public function store(Request $request, $id)
        {
            $rules = array (
                'Message' => 'required',
            );

            $this->validate($request, $rules);

            $comment = new VideoCommentModel();
            $comment->Post=$request->Post;
            $comment->Author=$request->Author;
            $comment->Message=$request->Message;
            $comment->save();

            $Video = DB::table('Video')->where('id', '=', $id)->get();
            $Video_Comments = DB::table('Video')->join('Video_comments', 'Video.id', '=', 'Video_Comments.Post')->join('Users', 'Users.id', '=', 'Video_comments.Author')->where('Video.id', '=', $id)->get();
            return view('single_video', compact('Video', 'Video_Comments'));
        }

        public function destroy($id)
        {

            VideoCommentModel::where('Video_Comments.Post', '=', $id)->delete();
            return redirect('/video');
        }
    }
