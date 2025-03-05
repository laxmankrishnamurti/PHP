<?php

if (empty($_POST)) {
    echo "Please choose any one of the book";
} else {
    $books = $_POST['books_'];
}
?>
<p>You have selected</p>
<?php
foreach ($books as $book) {
?>

    <ul>
        <?php
        echo $book
        ?>
    </ul>

<?php } ?>