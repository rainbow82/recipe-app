<?php

include "classes/recipe.php";

$recipe1 = new Recipe();

//referece the class properties ->
$recipe1 -> source = "Shannon Beach";
$recipe1-> setTitle = ("my first recipe");
$recipe1-> addIngredient("egg", 1);
$recipe1-> addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2 -> source = "Betty Crocker";
$recipe2-> setTitle = ("My Second Recipe");

//access class methods ->
echo $recipe1->getTitle();
foreach ($recipe1->getIngredients() as $ing) {
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();


?>
