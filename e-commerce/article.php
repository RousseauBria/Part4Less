<?php require 'db.php';
if (isset($_GET['type']) AND $_GET['type'] == 'bike') {
    $query = $db->query('SELECT * FROM bike');
} elseif (isset($_GET['type']) AND $_GET['type'] == 'automobile'){
    $query = $db->query('SELECT * FROM automobile');
} else {
    header('location:index.php');
    exit;
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php require 'header.php'?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-between">
                <?php while ($data = $query->fetch()): ?>
                    <div style="width:30%;">
                        <img class="img-fluid" src="img/<?php echo $data['Image']; ?>" alt="">
                        <h4 class="card-title"> <?php echo $data['title']; ?></h4>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>



<?php require 'footer.php' ?>
</body>
</html>
