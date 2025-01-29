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
// array_pop($countries);
// array_shift($countries);
$new_countries = array_reverse($countries);
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
                <?php echo ucwords($key) ?>
            </td>
            <td>
                <?php echo $value ?>
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

foreach ($users as $user) {
    foreach ($user as $key => $value) {
        echo ucwords($key) . "  ";
        echo $value;
        echo "<br/>";
    }
}
?>