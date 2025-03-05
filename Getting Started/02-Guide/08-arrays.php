<?php

/**
 * In PHP, there are three types of array :-
 *  1. Indexed
 *  2. Associative
 *  3. Multi-Dimensional
 * 
 *  We cannot use "echo" to print an array. Instead, we can use "print_r(variable)" to print the array.
 */

# Indexed Array

$countries = array("India", "Pakistan", "Nepal", "Shrilanka", "China", "Russia", "Afganistan");

array_push($countries, "Isreal", "USA", "Brazil");
print_r($countries);
echo "<br/>";

array_pop($countries);
print_r($countries);
echo "<br/>";

array_shift($countries);
print_r($countries);
echo "<br/>";

array_unshift($countries, "United World");
print_r($countries);
echo "<br/>";

$new_countries = array_reverse($countries);
print_r($new_countries);
echo "<br/>";

foreach ($new_countries as $country) {
    echo $country;
    echo "<br/>";
}

echo count($countries); // Return the lenght of the array 
// echo "<pre>";
print_r($new_countries);

# Associative Array :: Values sit in the form of key-value pairs.
?>

<?php
$user = array(
    "name" => "Laxman Krishnamurti",
    "age" => 22,
    "email" => "laxmankrishnamurti@gmail.com",
    "is_logged_in" => true
);
echo "<br/>";
print_r($user);
echo "<br/>";
//$user = array_flip($user);  // Flip the array -> Key become vlaue and vlaue becomes key
//$user = array_reverse($user);
// exit;
?>

<table border="1">
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
    <?php
    foreach ($user as $key => $value) {
    ?>

        <tr>
            <td>
                <?= ucwords($key) ?>
            </td>
            <td>
                <?= $value ?>
            </td>
        </tr>

    <?php } ?>
</table>

<?php
// Pre-defined function for associative array

$user_keys = array_keys($user); // With Index
print_r($user_keys);
echo "<br/>";
$user_vlaues = array_values($user); // With Index
print_r($user_vlaues);
?>


<?php
# Multi-Dimensional Array :: Array Inside Array

$users = array(
    array(
        "name" => "Laxman Krishnamurti",
        "email" => "laxmankrishnamurti@gmail.com"
    ),
    array(
        "name" => "harshadmehta",
        "email" => "harshadmehta@gmail.com"
    )
);

// echo "<pre/>";
echo "<br/>";
echo "<br/>";
echo "Multi-Dimensional Associative Array";
echo "<br/>";
echo "<br/>";


// foreach ($users as $user) {
//     foreach ($user as $key => $value) {
//         echo ucwords($key) . "  ";
//         echo $value;
//         echo "<br/>";
//     }
// }
?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php foreach ($users as $user) { ?>
        <tr>
            <?php foreach ($user as $key => $value) { ?>
                <td><?= $value ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>