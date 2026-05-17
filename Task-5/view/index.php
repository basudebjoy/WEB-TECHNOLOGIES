<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>
</head>
<body>

<h2>Library Management System</h2>

<form id="bookForm">

    Title:
    <input type="text" id="title">

    <br><br>

    Author:
    <input type="text" id="author">

    <br><br>

    Category:
    <input type="text" id="category">

    <br><br>

    Status:
    <input type="text" id="status">

    <br><br>

    <button type="button" onclick="addBook()">
        Add Book
    </button>

</form>

<br><br>

<table border="1" cellpadding="10">

    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody id="bookData">

    </tbody>

</table>

<script>

loadBooks();

function loadBooks()
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById("bookData").innerHTML =
            this.responseText;
        }
    };

    xhttp.open("GET", "../ajax/handler.php?fetch=true", true);

    xhttp.send();
}

function addBook()
{
    var title = document.getElementById("title").value;
    var author = document.getElementById("author").value;
    var category = document.getElementById("category").value;
    var status = document.getElementById("status").value;

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            loadBooks();
        }
    };

    xhttp.open("POST", "../controller/bookController.php", true);

    xhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    xhttp.send(
        "action=add" +
        "&title=" + title +
        "&author=" + author +
        "&category=" + category +
        "&status=" + status
    );
}

function deleteBook(id)
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            loadBooks();
        }
    };

    xhttp.open("POST", "../controller/bookController.php", true);

    xhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    xhttp.send(
        "action=delete&id=" + id
    );
}

</script>

</body>
</html>