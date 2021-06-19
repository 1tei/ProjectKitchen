<?php

namespace App\Http\Controllers;

use App\models\RecipeModel;
use App\models\IngredientModel;
use App\models\RecipeRatingModel;
use App\models\RecipeCommentModel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RecipeController extends Controller
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
            $Recipes = DB::table('Recipe')->get();
            return view('recipe_page', compact('Recipes'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('recipe_create');
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
            'Content' => 'required|min:10',
        );

        $this->validate($request, $rules);

        $recipe = new RecipeModel();
        $recipe->Author=$request->Author;
        $recipe->Title=$request->Title;
        $recipe->Description=$request->Description;
        $recipe->Content=$request->Content;
        $recipe->Views=$request->Views;
        $recipe->save();
        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Recipes = DB::table('Recipe')->where('id', '=', $id)->get();
        $Recipe_Comments = DB::table('Recipe')->join('Recipe_comments', 'Recipe.id', '=', 'Recipe_Comments.Post')->join('Users', 'Users.id', '=', 'Recipe_comments.Author')->where('Recipe.id', '=', $id)->get();
        return view('single_recipe', compact('Recipes', 'Recipe_Comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = RecipeModel::findOrFail($id);
        return view('recipe_edit',compact('recipe'));
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
            'Content' => 'required|min:10',
        );

        $this->validate($request, $rules);

        $recipe = RecipeModel::find($id);
        $recipe->Author=$request->Author;
        $recipe->Title=$request->Title;
        $recipe->Description=$request->Description;
        $recipe->Content=$request->Content;
        $recipe->save();
        return redirect('/recipes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        IngredientModel::where('Ingredient_list.Recipe', $id)->delete();
        RecipeCommentModel::where('Recipe_comments.Post', $id)->delete();
        RecipeRatingModel::where('Recipe_ratings.Post', $id)->delete();

        RecipeModel::findOrFail($id)->delete();
        return redirect('/recipes');
    }
}
