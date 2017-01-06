<?php

include "classes/recipe.php";
include "classes/render.php";
include "classes/RecipeCollection.php";
include "inc/allrecipes.php";

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($crab_cakes);
$cookbook->addRecipe($beef_medallions);
$cookbook->addRecipe($silver_dollar_cakes);
$cookbook->addRecipe($french_toast);
$cookbook->addRecipe($corn_beef_hash);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);

$breakfast = new RecipeCollection("Favorite Breakfast Recipes");
foreach ($cookbook->filterByTag('breakfast') as $recipe) {
    $breakfast->addRecipe($recipe);
}

//echo Render::listRecipes($breakfast->getRecipeTitles());

echo "\n\nSHOPPING LIST\n\n";
echo Render::listShopping($breakfast->getCombinedIngredients());

// $recipe1 = new Recipe("my first recipe");

//referece the class properties ->
// $recipe1 -> setSource("Shannon Beach");
// $recipe1-> addIngredient("egg", 1);
// $recipe1-> addIngredient("flour", 2, "cup");
//
// $recipe2 = new Recipe();


//access class methods ->
// echo $recipe1->getTitle();

//
// $recipe1->addInstruction("This is my first instruction");
// $recipe1->addInstruction("This is my second instruction");
// $recipe1->addTag("Breakfast");
// $recipe1->addTag("Main Course");
// $recipe1->setYeild("6 servings");
//
// echo $recipe1;

//calling a static method outside it's class
//echo Render::displayRecipe($belgian_waffles);


?>
