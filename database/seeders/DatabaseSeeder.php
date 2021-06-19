<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $time = \Carbon\Carbon::now();

        DB::table('Users')->insert([
            'id' => '1',
            'name' => 'Admin',
            'email' => 'admin@projectkitchen',
            'password' => Hash::make('Admin'),
            'role' => 'Admin',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Users')->insert([
            'id' => '2',
            'name' => 'Editor',
            'email' => 'Editor@projectkitchen',
            'password' => Hash::make('Editor'),
            'role' => 'Editor',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Users')->insert([
            'id' => '3',
            'name' => 'User1',
            'email' => 'User1@projectkitchen',
            'password' => Hash::make('User'),
            'role' => 'User',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Users')->insert([
            'id' => '4',
            'name' => 'User2',
            'email' => 'User2@projectkitchen',
            'password' => Hash::make('User'),
            'role' => 'User',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Users')->insert([
            'id' => '5',
            'name' => 'User3',
            'email' => 'User3@projectkitchen',
            'password' => Hash::make('User'),
            'role' => 'User',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Recipe')->insert([
            'id' => '1',
            'Author' => '1',
            'title' => 'Chicken Teriyaki',
            'description' => 'Simple dish for the whole family, best served with rice',
            'Content' => 'Heat cooking oil in a large pan over medium heat. Stir fry chicken, stirring occasionally until lightly browned and crisp.
            In a small jug or bowl whisk together the soy sauce, sugar, Sake/vinegar, Mirin and sesame oil to combine. Set aside.
            Add the garlic to the centre of the pan and saute until lightly fragrant (about 30 seconds). Pour in the sauce and allow to cook, while stirring, until the sauce thickens into a beautiful shiny glaze (about 2-3 minutes).*
            Add in the steamed broccoli. Garnish with green onion (or shallot) slices and serve over steamed rice.',
            'created_at' => $time,
            'updated_at' => $time,
            'Views' => '124',
            'Photo' => '/images/ChickenTeriyaki.png',
        ]);

        DB::table('Recipe')->insert([
            'id' => '2',
            'Author' => '2',
            'title' => 'Sesame Beef Stir Fry',
            'description' => 'Delicious stir fry made from leftover vegies',
            'Content' => 'Combine marinade ingredients in bowl and add flank steak.  Set aside 15 minutes.
            Heat 1 Tbsp vegetable oil in large skillet over MED HIGH heat.  Remove excess marinade from steak and cook in a single layer, for 2-3 minutes, stirring to cook both sides.  Depending on the size of your pan, you may need to do this in batches.  Remove steak to plate.
            Heat remaining 1 Tbsp vegetable oil, then add peas, carrots and green onion and cook stirring often, 2-3 minutes.
            Whisk together broth, soy sauce, honey/brown sugar, rice vinegar, garlic, sesame oil, fresh ginger, cornstarch, and red pepper flakes.  Add steak and sauce to skillet, stirring to combine.  Sauce will thicken.
            Stir in cooked ramen noodles if using, and serve!',
            'created_at' => $time,
            'updated_at' => $time,
            'Views' => '542',
            'Photo' => '/images/SesameBeefStirFry.png',
        ]);

        DB::table('Recipe')->insert([
            'id' => '3',
            'Author' => '2',
            'title' => 'Easy Buttermilk Cornbread',
            'description' =>'There’s something about a crispy, crunchy buttery crust, with a soft and fluffy inside that is so addictive, with a perfect amount of honey.',
            'content' => 'Preheat the oven to 200C | 400F and position a rack in the middle. Lightly grease a 9-inch cast iron skillet or 9-inch square baking dish with butter and place skillet/dish into the oven to heat up.
            (Alternatively for cast iron skillets: heat 1/2 cup of unmelted butter in your cast iron over stove top on medium heat until melted, turn heat off then allow the butter to cool slightly before adding to the batter.)
            In a large bowl, whisk together the flour, cornmeal, sugar, baking powder (If using), baking soda and salt.
            Make a well in the centre and add the buttermilk, honey and eggs. Mix together well to combine, then add in the slightly cooled melted butter. Mix again until "just" combined (don not over mix).
            Carefully remove your "hot" pan or dish from the oven with oven mitts, and pour the batter into the hot skillet or dish. Listen to that sizzle! That is what you want.
            Bake until the cornbread begins to brown on top and a toothpick inserted in the centre comes out clean (about 20-23 minutes). Allow to cool for about 10 minutes before slicing and serving.',
            'created_at' => $time,
            'updated_at' => $time,
            'Views' => '23',
            'Photo' => '/images/EasyButtermilkCornbread.png',
        ]);

        DB::table('Recipe_Comments')->insert([
            'id' => '1',
            'Post' => '1',
            'Author' => '3',
            'Message' => 'I made this for my fiancee and he loved it! Thank you very much',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Recipe_Comments')->insert([
            'id' => '2',
            'Post' => '2',
            'Author' => '3',
            'Message' => 'I never know what to do with leftovers, this was very helpful. I am just wondering whether it is possible to substitute beef with any other ingredient',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Recipe_Comments')->insert([
            'id' => '3',
            'Post' => '3',
            'Author' => '3',
            'Message' => 'One of the most delicious and beautiful things that I have laid my eyes upon!',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Recipe_Comments')->insert([
            'id' => '4',
            'Post' => '2',
            'Author' => '4',
            'Message' => 'Never knew it was this simple...',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Recipe_Comments')->insert([
            'id' => '5',
            'Post' => '2',
            'Author' => '4',
            'Message' => 'This is something I never knew I needed in my life',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Recipe_Comments')->insert([
            'id' => '6',
            'Post' => '2',
            'Author' => '5',
            'Message' => 'This recipe has changed my life!!!',
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('Recipe_Ratings')->insert([
            'id' => '1',
            'Rating' => '8',
            'Post' => '1',
            'Author' => '3',
        ]);

        DB::table('Recipe_Ratings')->insert([
            'id' => '2',
            'Rating' => '9',
            'Post' => '2',
            'Author' => '3',
        ]);

        DB::table('Recipe_Ratings')->insert([
            'id' => '3',
            'Rating' => '10',
            'Post' => '1',
            'Author' => '3',
        ]);

        DB::table('Recipe_Ratings')->insert([
            'id' => '4',
            'Rating' => '7',
            'Post' => '1',
            'Author' => '4',
        ]);

        DB::table('Recipe_Ratings')->insert([
            'id' => '5',
            'Rating' => '7',
            'Post' => '2',
            'Author' => '4',
        ]);

        DB::table('Recipe_Ratings')->insert([
            'id' => '6',
            'Rating' => '9',
            'Post' => '3',
            'Author' => '4',
        ]);

        DB::table('Recipe_Ratings')->insert([
            'id' => '7',
            'Rating' => '5',
            'Post' => '1',
            'Author' => '5',
        ]);

        DB::table('Recipe_Ratings')->insert([
            'id' => '8',
            'Rating' => '6',
            'Post' => '2',
            'Author' => '5',
        ]);

        DB::table('Recipe_Ratings')->insert([
            'id' => '9',
            'Rating' => '9',
            'Post' => '3',
            'Author' => '5',
        ]);

        DB::table('Ingredients')->insert([
            'id' => '1',
            'Name' => 'Chicken',
            'Description' => 'Chicken Breast',
            'Price' => '4.58',
        ]);

        DB::table('Ingredients')->insert([
            'id' => '2',
            'Name' => 'Soy Sauce',
            'Description' => 'Bottle of Soy Sauce',
            'Price' => '2.99',
        ]);

        DB::table('Ingredients')->insert([
            'id' => '3',
            'Name' => 'Honey',
            'Description' => 'Tablespoon of honey',
            'Price' => '0.50',
        ]);

        DB::table('Ingredients')->insert([
            'id' => '4',
            'Name' => 'Eggs',
            'Description' => 'One carton of eggs',
            'Price' => '2.58',
        ]);

        DB::table('Ingredients')->insert([
            'id' => '5',
            'Name' => 'Garlic',
            'Description' => 'One clove of garlic',
            'Price' => '0.12',
        ]);

        DB::table('Ingredients')->insert([
            'id' => '6',
            'Name' => 'Broccoli',
            'Description' => '2 cups of Broccoli',
            'Price' => '2.20',
        ]);

        DB::table('Ingredient_List')->insert([
            'id' => '1',
            'Ingredient' => '5',
            'Recipe' => '2',
        ]);

        DB::table('Ingredient_List')->insert([
            'id' => '2',
            'Ingredient' => '5',
            'Recipe' => '1',
        ]);

        DB::table('Ingredient_List')->insert([
            'id' => '3',
            'Ingredient' => '6',
            'Recipe' => '2',
        ]);

        DB::table('Ingredient_List')->insert([
            'id' => '4',
            'Ingredient' => '1',
            'Recipe' => '1',
        ]);

        DB::table('Ingredient_List')->insert([
            'id' => '5',
            'Ingredient' => '2',
            'Recipe' => '1',
        ]);

        DB::table('Ingredient_List')->insert([
            'id' => '6',
            'Ingredient' => '3',
            'Recipe' => '3',
        ]);

        DB::table('Video')->insert([
            'id' => '1',
            'Author' => '1',
            'Title' => 'Ice Cream Sandwiches',
            'Description' => 'Best Ice Cream Sandwiches Completely From Scratch',
            'Video_link' => 'https://www.youtube.com/embed/aw22j8M048w',
            'created_at' => $time,
            'updated_at' => $time,
            'Views' => '5425',
        ]);

        DB::table('Video')->insert([
            'id' => '2',
            'Author' => '1',
            'Title' => 'Gourmet Burger',
            'Description' => 'The 2 Dollar Gourmet Burger',
            'Video_link' => 'https://www.youtube.com/embed/IJou15msogM',
            'created_at' => $time,
            'updated_at' => $time,
            'Views' => '129',
        ]);

        DB::table('Video')->insert([
            'id' => '3',
            'Author' => '2',
            'Title' => 'Mongolian Beef',
            'Description' => 'The Easiest Homemade Mongolian Beef',
            'Video_link' => 'https://www.youtube.com/embed/z3xDriIV7gI',
            'created_at' => $time,
            'updated_at' => $time,
            'Views' => '1259',
        ]);

        DB::table('Video_Comments')->insert([
            'id' => '1',
            'Post' => '1',
            'Author' => '3',
            'Message' => 'Damn, I was already drooling as it was... but this is another level',
            'created_at' => $time,
            'updated_at' => $time,
        ]);


        DB::table('Video_Comments')->insert([
            'id' => '2',
            'Post' => '3',
            'Author' => '4',
            'Message' => 'This dude is literally in another level of itself',
            'created_at' => $time,
            'updated_at' => $time,
        ]);


        DB::table('Video_Comments')->insert([
            'id' => '3',
            'Post' => '3',
            'Author' => '4',
            'Message' => 'How can you even think of this?!',
            'created_at' => $time,
            'updated_at' => $time,
        ]);
    }
}
