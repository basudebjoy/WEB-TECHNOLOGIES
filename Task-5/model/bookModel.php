<?php

include("../config/db.php");

function insertBook($title, $author, $category, $status)
{
    global $conn;

    $sql = "INSERT INTO books(title, author, category, status)
            VALUES('$title', '$author', '$category', '$status')";

    return mysqli_query($conn, $sql);
}

function getAllBooks()
{
    global $conn;

    $sql = "SELECT * FROM books";

    return mysqli_query($conn, $sql);
}

function deleteBook($id)
{
    global $conn;

    $sql = "DELETE FROM books WHERE id=$id";

    return mysqli_query($conn, $sql);
}

?>