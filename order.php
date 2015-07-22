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
    <title>Order Form</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <p>Hi <?php echo $recipient; ?>, </p>
    <p>Just making my weekly order. Details are below.</p>
    <p><?php echo $downtown_order; ?></p>
    <p><?php echo $downtown_address; ?></p>
    <p><?php echo $northwest_order; ?></p>
    <p><?php echo $northwest_address; ?></p>
    <p><?php echo $south_order; ?></p>
    <p><?php echo $south_address; ?></p>
    <p>Thanks,</p>
    <p><?php echo $author; ?></p>

      <form action="form.php">
        <button type="submit" class="btn">Back to form</button>
      </form>
</body>
</html>
