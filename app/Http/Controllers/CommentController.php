<?php

namespace App\Http\Controllers;

use App\models\RecipeModel;
use App\models\IngredientModel;
use App\models\RecipeRatingModel;
use App\models\RecipeCommentModel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show($id)
    {
        if (!Auth::check()){
            return view ('main');
        }
        else {
            $Recipes = DB::table('Recipe')->where('id', '=', $id)->get();
            $Recipe_Comments = DB::table('Recipe_comments')->join('Recipe', 'Recipe.id', '=', 'Recipe_Comments.Post')->join('Users', 'Users.id', '=', 'Recipe_comments.Author')->where('Recipe.id', '=', $id)->get();
            return view('single_recipe', compact('Recipes', 'Recipe_Comments'));
        }
    }

    public function store(Request $request, $id)
    {
        $rules = array (
            'Message' => 'required',
        );

        $this->validate($request, $rules);

        $comment = new RecipeCommentModel();
        $comment->Post=$request->Post;
        $comment->Author=$request->Author;
        $comment->Message=$request->Message;
        $comment->save();

        $Recipes = DB::table('Recipe')->where('id', '=', $id)->get();
        $Recipe_Comments = DB::table('Recipe_comments')->join('Recipe', 'Recipe.id', '=', 'Recipe_Comments.Post')->join('Users', 'Users.id', '=', 'Recipe_comments.Author')->where('Recipe.id', '=', $id)->get();
        return view('single_recipe', compact('Recipes', 'Recipe_Comments'));
    }

    public function destroy($id)
    {

        RecipeCommentModel::where('Recipe_Comments.Post', '=', $id)->delete();
        return redirect('/recipe/'.$id);
    }
}
