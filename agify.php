<?php

if ( ! empty($_GET['name'])) {

    $response = file_get_contents("https://api.agify.io?name={$_GET['name']}");

    $data = json_decode($response, true);

    $age = $data['age'];

}

?>

<!DOCTYPE html>
<html>
        
    <head>
        <title>Example</title>
    </head>

    <body>

    <?php if(isset($age)) : ?> 

        Age: <?= $age ?>

    <?php endif; ?>

        <form>
            <lable for="name">Name</label>
            <input type="text" name="name">
            <button>Guess Age</button>
        </form>
    </body>

</html>