<?php

class Recipe
{
    private $title;
    private $ingredients = array();
    private $instructions = array();
    private $yeild;
    private $tag = array();
    private $source  = "Alena Holligan";

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

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function addInstruction($string)
    {
        $this->instructions[] = $string;
    }

    public function getInstructions()
    {
        return $this->instructions;
    }

    public function addTag($tag)
    {
        $this->tags[] = strtolower($tag);
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setYeild($yeild)
    {
        $this->yeild = $yeild;
    }

    public function getYeild()
    {
        return $this->yeild;
    }

    public function setSource($source)
    {
        $this->source = ucwords($source);
    }

    public function getSource()
    {
        return $this->source;
    }

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }
}










 ?>
