<?php

include "classes/recipe.php";
include "classes/render.php";

$recipe1 = new Recipe();

//referece the class properties ->
$recipe1 -> setSource("Shannon Beach");
$recipe1-> setTitle("my first recipe");
$recipe1-> addIngredient("egg", 1);
$recipe1-> addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();


//access class methods ->
// echo $recipe1->getTitle();


$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");
$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");
$recipe1->setYeild("6 servings");

echo Render::displayRecipe($recipe1);


?>
