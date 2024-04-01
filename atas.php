<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web ALAM</title>
</head>
<style>
body {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f1f1f1;
}

.nav {
    padding: 16px;
    background-color: khaki;
    color: blue;
    text-align: center;
}

.nav a {
    text-decoration: none;
    color: blue;
    font-weight: bold;
    text-transform: uppercase;
}

.container {
    padding: 16px;
    /* background-color: black; */
}

.row {
    display: flex;
}

.col-3 {
    flex: 20%;
    padding: 16px;
    margin: 16px;
    background-color: #f1f1f1;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.col-3 img {
    width: 100%;
    border-radius: 10px;
}

.col-3 h2 {
    color: blue;
    text-align: center;
    text-transform: uppercase;
}

.col-3 p {
    color: black;
    text-align: justify;
}

.col-3:hover {
    background-color: #f1f1f1;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    transform: scale(1.1);
}

.col-4 {
    flex: 30%;
    padding: 16px;
    margin: 16px;
    background-color: #f1f1f1;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

}

.col-4 img {
    width: 100%;
    border-radius: 10px;
}

.col-12 {
    margin: 16px;
    padding: 16px;

    background-color: #f1f1f1;
    flex: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}


table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
    overflow-y: auto;
}

table,
th,
td {
    border: 1px solid black;
}

th {
    background-color: khaki;
    color: black;

}

footer {
    padding: 16px;
    background-color: khaki;
    color: blue;
    text-align: center;
}

.form {
    margin: 16px;
    padding: 16px;
    background-color: #f1f1f1;
}

.form-group {
    margin: 8px;
}

.form-control {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.form-control:focus {
    outline: none;
    border: 1px solid #007bff;
}

.btn {
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 8px;
}

.btn:hover {
    background-color: #0056b3;
}

@media screen and (max-width: 768px) {
    .row {
        flex-direction: column;
    }
}
</style>

<body>

    <h1 align="center" class>WEB ALAM</h1>
    <div class="nav">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <?php
            //looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                // echo "$key $value <br>";
                echo "<a href='index.php?hal=$key'>$value</a> | ";
            }
        ?>
    </div>