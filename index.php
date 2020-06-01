<?php

$submit = filter_input(INPUT_POST, 'submit');
$email = filter_input(INPUT_POST, 'email');
$gender = filter_input(INPUT_POST, 'gender');
var_dump($submit);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

    if(isset($submit)) {
?> 

    <h2>Formulář byl odeslán</h2>
    Email: <?= $email ?></br>
    Pohlaví: <?= $gender ?>

<?php
    } else { 
?>
    <form action="index.php" method="post">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">

        <h2>Pohlaví</h2>
        <input type="radio" name="gender" value="male" id="gender-male">
        <label for="gender-male">Muž</label>
        </br>

        <input type="radio" name="gender" value="female" id="gender-female">
        <label for="gender-female">Žena</label>
        </br>

        <input type="radio" name="gender" value="other" id="gender-other">
        <label for="gender-other">Nespecifikováno</label>
        </br>

        <input type="submit" name="submit" value="Odeslat">
    </form>

   <h2>Stránka byla načtena bez formuláře</h2>
   
<?php
}
?>

</body>
</html>