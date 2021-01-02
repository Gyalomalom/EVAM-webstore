<?php 


include '../Includes/handlerautoload.inc.php'

?>


<?php
    $view = new View();
    $result = $view->showProduct($_GET['id']);

    echo "<table>";
    echo "<tr>";
    echo "<th>Product ID</th>";
    echo "<td>" . $result["ID"] . "</td>";
    echo "<th>Product name</th>";
    echo "<td>" . $result["itemname"] . "</td>";
    echo "<th>Product price</th>";
    echo "<td>" . $result["price"] . "</td>";
    echo "<th>Collection</th>";
    echo "<td>" . $result["collection"] . "</td>";
    echo "<th>Amount</th>";
    echo "<td>" . $result["amount"] . "</td>";
    echo "</tr>";
    echo "</table>";
?>