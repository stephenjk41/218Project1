<?php
// get the data from the form
$email= filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,"password");
$first = filter_input(INPUT_POST,"first");
$last = filter_input(INPUT_POST,"last");
$birthday = filter_input(INPUT_POST,"birthday");

// validate form data
$i = strpos($email,'@');
if (empty($email)) {
    echo("Please type a email in");
}
else if ($i === false) {
    echo('There is no @ in the email');
}
if (empty($password)) {
    echo ("Please type a password in");
}
else if (strlen($password)<=8) {
    echo ("The Password needs to greater than 8 characters");
}
if (empty($first)) {
     echo ("Please Type a Name in");
}
if (empty($last)) {
    echo ("Please Type Last Name in");
}
if (empty($birthday)) {
    echo ("Please Type Birthday");
}
?>
<html>
<button type="button"><a href="index2.html">Back</a></button>

</html>
