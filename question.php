<?php

//get information from form
$Name = filter_input(INPUT_POST,"Name");
$Body = filter_input(INPUT_POST,"Body");
$Skill = filter_input(INPUT_POST,"Skill");

//Check validation of Name
if (empty($Name)) {
    $message = "Please name your question";
}
elseif ($Name != strlen($Name)<=3) {
    $message = "The question title is too short!";
}
else {
    echo $Name;
    echo "<br>";
}
//Check validation of Body
if (empty($Body)) {
    $message = "Please add a body for your question";
}
elseif ($Body != strlen($Body)>=500)
{
    $message = "The question must be less than 500 characters";
}
else {
   echo $Name;
}
if (empty($Skill)) {
    $message = "Please type skill(s) in";
}
elseif (strpos($Skill,',') === true)
{
    $Array = explode(',', $Skill);
    echo '<pre>'; print_r($Array); echo '</pre>';
}
?>

