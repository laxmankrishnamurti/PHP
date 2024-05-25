<?php


echo "for loop starts";
echo "<br/>";

for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo "<br/>";
}

echo "<br/>";
echo "while loop starts";
echo "<br/>";


$i = 0;
while ($i < 10) {
    echo $i;
    echo "<br/>";
    $i++;
}


echo "<br/>";
echo "do-while loop starts";
echo "<br/>";

$i = 0;
do {
    echo "<br/>";
    echo $i;
    $i++;
} while ($i < 10);


//Break and Continue;

echo "<br/>";
echo "<br/>";
echo "break loop starts";
echo "<br/>";

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i;
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "continue loop starts";
echo "<br/>";

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i;
    echo "<br/>";
}


echo "<br/>";
echo "<br/>";
echo "goto loop starts";
echo "<br/>";

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        goto terminate;
    }
    echo $i;
    echo "<br/>";
}

terminate:
$name = "Harshad";
echo "$name Loop reached on 5th position, Loop terminated";