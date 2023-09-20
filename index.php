<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="x-icon" href="images/favicon.ico">
    <title>Document</title>
</head>
<body>
    <h1>Heading before php tag</h1>


<?php 
include "includes/newClass.inc.php";

echo "Echo text<br>"; 
echo "Echo another text<br>";
echo "<b>bold text</b><br>";

$my_first_variable = "string variable";
echo $my_first_variable;
echo "<br>";
$num_variable = 54;
echo "Mans mīļākais skaitlis ir $num_variable";
echo "<br>";

$person = new Person();
$person->setName("Elīza");
echo $person->getName();


?>


<?php


$connect = mysqli_connect(
    'db',
    'lamp_demo',
    'password',
    'lamp_demo'
);

$query = 'SELECT *
    FROM blog';
$result = mysqli_query($connect, $query);

echo '<h1>MySQL Content:</h1>';

while($record = mysqli_fetch_assoc($result))
{
    echo '<h2>'.$record['title'].'</h2>';
    echo '<p>'.$record['content'].'</p>';
    echo 'Posted: '.$record['date'];
    echo '<hr>';
}

?>

<script src="js/app.js" > 
</script>
</body>
</html>