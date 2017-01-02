<?php

class Recipe
{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yeild;
    public $tag = array();
    public $source  = "Alena Holligan";

    private $measurements = array(
        'tsp',
        'tbsp',
        'cup',
        'oz',
        'lb',
        'fl oz',
        'pint',
        'quart',
        'gallon'
    );

    public function setTitle($title)
    {
        $this->title = ucwords($title);
        //this line sets the value of the title property to the value that was passed as an
        //argument
        //$this->title = access to the title property
        //the past arguement =$title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function addIngredient($item, $amount = null, $measure = null)
    {
        if($amount != null && !is_float($amount) && !is_int($amount)){
            exit("The amount must be a float: " . gettype($amount) . " amount given.");
        }

        if($measure != null && !in_array(strtolower($measure), $this->measurements)){
            exit("Please enter a vaild measurement: " . implode(",", $this->measurements));
        }
            $this->ingredients[] = array(
              'item' => ucwords($item),
              'amount' => $amount,
              'measure' => strtolower($measure)
            );

    }

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }
}

$recipe1 = new Recipe();

//referece the class properties ->
$recipe1 -> source = "Shannon Beach";
$recipe1-> setTitle = ("my first recipe");
$recipe1-> addIngredient("egg", 1, "doz");

$recipe2 = new Recipe();
$recipe2 -> source = "Betty Crocker";
$recipe2-> setTitle = ("My Second Recipe");

//access class methods ->
echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();








 ?>
