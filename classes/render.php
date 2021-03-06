<?php
class Render
{
    public function __toString()
    {
        //magic constants
        $output .= "\n The following methods are availabe for " . __CLASS__ . " objects: \n";
        $output .= implode("\n", get_class_methods(__CLASS__)) . "\n";
        return $output;
    }

    public static function listShopping($ingredient_list)
    {
        //sort on the key
        ksort($ingredient_list);

        //return the keys
        return implode("\n", array_keys($ingredient_list));

    }

    public static function listIngredients($ingredients)
    {
        $output = "";
        foreach ($ingredients as $ing) {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "\n";
        }
        return $output;
    }

    public static function listRecipes($titles)
    {
        asort($titles);
        $output = "";
        foreach ($titles as $key => $title) {
            if($output != "")
            {
                $output .= "\n";
            }
            $output .= "[$key] $title";
        }
        return $output;
    }

    public static function displayRecipe($recipe)
    {
        $output = "";
        $output .=  $recipe->getTitle() . " by " . $recipe->getSource();
        $output .= "\n";
        $output .= implode(", ", $recipe->getTags());
        $output .= "\n\n";
        //when calling static functions in their class, use self
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= "\n";
        $output .= implode("\n", $recipe->getInstructions());
        $output .= "\n";
        $output .= $recipe->getYield();
        $output .= "\n";
        return $output;
    }
}























 ?>
