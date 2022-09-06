<?php

$con = mysqli_connect('localhost', 'root');

/* if ($con) {
    echo "connected";
}
else {
    echo "not connected";
} */

mysqli_select_db($con, "itpedia");

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$flag=0;

if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["subject"]) || empty($_POST["message"])) {
    $msg = "<script type=\"text/javascript\">alert(\"Enter complete details\");</script>";
} else {
    $flag = 1;
    $query = "insert into itfeedback(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message');";
    mysqli_query($con, $query);
    $msg = "<script type=\"text/javascript\">alert(\"Response submitted successfully!\");</script>";
}
echo $msg;


/* header('location:index.php'); */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Response Submission</title>
</head>

<body>
    <?php include './header.php' ?>
    <div class="card text-center p-5">DATABASE RESPONSE : <br>
        <?php if ($flag == 1) {
            echo "Data submitted successfully!";
        } else {
            echo "Data Not Submitted!!!";
        }
        ?>
    </div>
    <div class="card text-center p-5">
        Name : <?php echo $name ?> <br>
        Email : <?php echo $email ?> <br>
        Phone : <?php echo $phone ?> <br>
        Subject : <?php echo $subject ?> <br>
        Message : <?php if (empty($_POST['message'])) {
                        echo "!! No Input !!";
                    } else {
                        echo $message;
                    } ?>
    </div>

    <?php include './footer.php' ?>

</body>

</html>