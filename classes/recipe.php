<? php

class Recipe
{
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yeild;
    public $tag = array();
    public $source  = "Alena Holligan";

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }
}

$recipe1 = new Recipe();

//referece the class properties
echo $recipe1 -> source;
$recipe1 -> source = "Shannon Beach";

$recipe2 = new Recipe();
$recipe2 -> source = "Betty Crocker";

var_dump($recipe1);







 ?>
