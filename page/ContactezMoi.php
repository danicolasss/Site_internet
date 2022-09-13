<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/menuCss.css">
    <link rel="stylesheet" href="../css/commonCss.css">
    <link rel="stylesheet" href="../css/ContactezMoiCss.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Danny-nicolas Grangeot</title>
</head>
<body>
<?php
require_once "../common/menu.php";
?>
    <section class="contact">
        <div class="content">
            <h2>Contactez moi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Facilis laborum officiis recusandae repellat sint! Aliquid
                asperiores autem distinctio eos ex libero, magnam magni,
                molestiae nam odit possimus quasi tempore voluptate.
            </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="bx">
                    <div class="icon"><i class='bx bx-map'></i>></div>
                    <div class="text">
                        <h3>Adresse</h3>
                        <p>14 rue du château,<br>Bonnay, <br>25870</p>
                    </div>
                </div>
                <div class="bx">
                    <div class="icon"><i class='bx bx-phone' ></i></div>
                    <div class="text">
                        <h3>Télephone</h3>
                        <p>06 41 08 66 31</p>
                    </div>
                </div>
                <div class="bx">
                    <div class="icon"><i class='bx bx-envelope' ></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>danny-nicolas.grangeot@hotmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="">
                    <h2>Envoyez moi un couriel</h2>
                    <div class="inputBx">
                        <input type="text" name="" required="required">
                        <span>Nom</span>
                    </div>
                    <div class="inputBx">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBx">
                        <textarea name=""  required="required"></textarea>
                        <span>Votre Message</span>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </section>






<script>

    <?php
    require_once "../js/menuJs.js";
    ?>
</script>
</body>
</html>