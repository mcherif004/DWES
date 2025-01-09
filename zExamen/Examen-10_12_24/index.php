<?php 

// Inicio de la sesion
session_start();

// Variables necesarias
$music = true;
$cardsP1 = [];
$cardsBanca = [];

// Array con las cartas
/*$cartas = array("carta2"=>2, "carta3"=>3, "carta4"=>4, "carta5"=>5 ,"carta6"=>6, "carta7"=>7,"carta8"=>8,"carta9"=>9, "carta10"=>10, "cartaJ"=>10, "cartaQ"=>10, "cartaK"=>10, "as" => 1 || 11);*/

// Id y valor de las cartas
$cards = array("id2", "id3", "id4", "id5", "id6", "id7", "id8", "id9", "id10", "idJ", "idQ", "idK", "idAs");

switch ($cards) {
    case "id2":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/2_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/2_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/2_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/2_of_spades" alt="">';
        }
    case "id3":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/3_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/3_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/3_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/3_of_spades" alt="">';
        }
    case "id4":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/4_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/4_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/4_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/4_of_spades" alt="">';
        }
    case "id5":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/5_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/5_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/5_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/5_of_spades" alt="">';
        }
    case "id6":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/6_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/6_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/6_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/6_of_spades" alt="">';
        }
    case "id7":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/7_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/7_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/7_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/7_of_spades" alt="">';
        }
    case "id8":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/8_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/8_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/8_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/8_of_spades" alt="">';
        }
    case "id9":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/9_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/9_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/9_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/9_of_spades" alt="">';
        }
    case "id10":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/10_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/10_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/10_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/10_of_spades" alt="">';
        }
}
// Ya habia creado el switch asi que lo dejare por aqui para no perder mas tiempo
/*
    case "idJ":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/10_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/10_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/10_of_spades" alt="">';
        }
    case "idQ":
    case "idK":
    case "idAs":
        $rNumber = rand(1, 4);
        if ($rNumber == 1){
            echo '<img src="./PNG-cards-1.3/3_of_clubs" alt="">';
        }
        elseif ($rNumber == 2) {
            echo '<img src="./PNG-cards-1.3/3_of_diamonds" alt="">';
        }
        elseif ($rNumber == 3) {
            echo '<img src="./PNG-cards-1.3/3_of_hearts" alt="">';
        }
        elseif ($rNumber == 4) {
            echo '<img src="./PNG-cards-1.3/3_of_spades" alt="">';
        }
    default:
        echo '<h1>Hay un error</h1>';
}
*/


// Cerrar sesión
if (isset($_GET['cerrarSesion'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Jack</title>
</head>
<body>
    <?php 
    if ($music = true) {
        echo('<audio src="Akiam Dance.mp3" controls play loop>Akiam Dance</audio>');
    }
    ?>
    <form action="POST">
        <input type="button" name="music" id="music">
    </form>
</body>
</html>