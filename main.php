<?php session_start(); 
    $title = 'Home Page';
?>
<?php include "templates/header.php"?>

<?php include "db.php"?>

<!-- <h2>MAIN</h2> -->

<?php
// if (array_key_exists('user', $_SESSION)) {
//     echo "Добро пожаловать " . $_SESSION['user'];
// }
?>

<div class="content">
<?php 
    $applications = get_complete_applications();


    foreach ($applications as $i) {
    echo "<div class='applications'>
    <div class='applications-text'> Категория: ".$i[5]."</div>
    <div class='applications-text'> Название: ".$i[1]."</div>";
    if ($i[3] == 'Решена') {
        echo "<div class='applications-text'>Статус:<div class='green-ball'></div></div>";
    };
    echo "<div class='applications-img'>"."<img src=".$i[6].">" .'</div>
    </div>';

    }
 
    // foreach ($applications as $i) {
    //     echo 'Название ' . $i[0] . "<br>";
    //     echo 'Описание ' . $i[1] . "<br>";
    //     echo "Сатус " . $i[2] . "<br>";
    //     echo " Категория "  . $i[5] . " <br>";
    //     echo "<img src='$i[6]'>";

    // }


?>
</div>



<? include "templates/footer.php"?>