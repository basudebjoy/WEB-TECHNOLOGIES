<?php

include_once("../model/bookModel.php");

if(isset($_POST["action"]))
{
    if($_POST["action"] == "add")
    {
        insertBook(
            $_POST["title"],
            $_POST["author"],
            $_POST["category"],
            $_POST["status"]
        );
    }

    if($_POST["action"] == "delete")
    {
        deleteBook($_POST["id"]);
    }
}

?>