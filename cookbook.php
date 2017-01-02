<?php

include "classes/recipe.php";
include "classes/render.php";
include "inc/allrecipes.php";

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
echo Render::displayRecipe($belgian_waffles);


?>
