<?php

include "classes/recipe.php";

$recipe1 = new Recipe();

//referece the class properties ->
$recipe1 -> setSource = "Shannon Beach";
$recipe1-> setTitle = ("my first recipe");
$recipe1-> addIngredient("egg", 1);
$recipe1-> addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();


//access class methods ->
echo $recipe1->getTitle();
foreach ($recipe1->getIngredients() as $ing) {
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"] ."\n";
}

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

echo implode("\n", $recipe1->getInstructions());

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

echo implode(",", $recipe1->getTags());

$recipe1->setYeild("6 servings");
echo $recipe1->getYeild();
echo $recipe1->getSource();

echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();


?>
