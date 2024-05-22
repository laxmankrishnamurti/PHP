<!-- <html>
<table border="2">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Laxman Krishnamurti</td>
            <td>laxmankrishnamurti@gmail.com</td>
            <td>9508981101</td>
        </tr>
        <tr>
            <td>Anjali Kumari</td>
            <td>anjalikumari@gmail.com</td>
            <td>7870247541</td>
        </tr>
        <tr>
            <td>Fruti Kumari</td>
            <td>frutikumari@gmail.com</td>
            <td>8579915621</td>
        </tr>
    </tbody>
</table>

</html> -->


<?php

$users = [
    [1, "Laxman", 21, "laxmankrishnamurti@gmail.com"],
    [2, "Harsh", 21, "harsh@gmail.com"],
    [3, "Aakash", 21, "aaskash@gmail.com"],
    [4, "Sonu", 21, "sonu@gmail.com"],
    [5, "Harshad", 21, "harshad@gmail.com"],
];
echo "<table border='2'>";

for ($i = 0; $i < count($users); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>