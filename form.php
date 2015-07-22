<?php
    $recipient = $_GET["recipient"];
    $downtown_address = $_GET["downtown_address"];
    $northwest_address = $_GET["northwest_address"];
    $south_address = $_GET["south_address"];
    $downtown_order = $_GET["downtown_order"];
    $northwest_order = $_GET["northwest_order"];
    $south_order = $_GET["south_order"];
    $author = $_GET["author"];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Create an order</title>
</head>
<body>
    <div class="container">
        <h1>Fill in the order info</h1>

        <form action="order.php">
            <div class="form-group">
                <label for="recipient">recipients name</label>
                <input id="recipient" name="recipient" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="downtown_address">downtown address</label>
                <input id="downtown_address" name="downtown_address" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="northwest_address">northwest address</label>
                <input id="northwest_address" name="northwest_address" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="south_address">south address</label>
                <input id="south_address" name="south_address" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="downtown_order">downtown order</label>
                <input id="downtown_order" name="downtown_order" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="northwest_order">northwest order</label>
                <input id="northwest_order" name="northwest_order" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="south_order">south order</label>
                <input id="south_order" name="south_order" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="author">author</label>
                <input id="author" name="author" class="form-control" type="text">
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>

    </div>
</body>
</html
