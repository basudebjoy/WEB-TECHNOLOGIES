<?php

include_once("../controller/bookController.php");
include_once("../model/bookModel.php");

if(isset($_GET["fetch"]))
{
    $result = getAllBooks();

    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";

        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["title"]."</td>";
        echo "<td>".$row["author"]."</td>";
        echo "<td>".$row["category"]."</td>";
        echo "<td>".$row["status"]."</td>";

        echo "<td>
        <button onclick='deleteBook(".$row["id"].")'>
        Delete
        </button>
        </td>";

        echo "</tr>";
    }
}

?>