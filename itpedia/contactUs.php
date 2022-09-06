<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITPEDIA || Contact Us</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Contactstyle.css">
    <link rel="stylesheet" href="./css/style1.css" />
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <?php include './header.php' ?>

    <header class="ScriptHeader">
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="rt-heading">
                    <h1>ITPEDIA</h1>
                    <p>Innovation that excites</p>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <div>
                        <div class="container">
                            <div class="contact-parent">
                                <div class="contact-child child1">
                                    <p>
                                        <i class="fas fa-map-marker-alt"></i> Address <br />
                                        <span> IT Department, <br>Gaya College Gaya
                                            <br />
                                            823001,Bihar
                                        </span>
                                    </p>

                                    <p>
                                        <a class="contact-link" href="tel:9155393090">Talk With US</a>
                                    </p>

                                    <p>
                                        <a class="contact-link" href="mailto:itpedia@gmail.com">Email Us</a>
                                    </p>
                                </div>

                                <div class="contact-child child2">
                                    <div class="inside-contact">
                                        <h2>Contact Us</h2>
                                        <h3>
                                            <span id="confirm">
                                        </h3>
                                        <form action="./submit.php" method="post">
                                            <p>Name *</p>
                                            <input id="txt_name" name="name" type="text" Required="required">

                                            <p>Email *</p>
                                            <input id="txt_email" name="email" type="email" Required="required">

                                            <p>Phone *</p>
                                            <input id="txt_phone" name="phone" type="tel" Required="required">

                                            <p>Subject *</p>
                                            <input id="txt_subject" name="subject" type="text" Required="required">

                                            <p>Message *</p>
                                            <textarea id="txt_message" name="message" rows="4" cols="20"></textarea>

                                            <input type="submit" id="btn_send" value="SEND" onclick="submitted()">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>




    <!-- Analytics -->

</body>

</html>