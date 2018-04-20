<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="js/script.js" async></script>
    <script src="js/background.js" async></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Document</title>
</head>

<header class="menu">

<a class="a1">Aide</a>
<a class="a2">A Propos</a>

</header>

<body>
    <div id="envoie">
            <form action="success.php" method="post" class="formu" enctype="multipart/form-data">

                            <h1> Transfactor </h1>


                <input type="file" name="file" size="30"> <br/>
               <span> Mon adresse Mail </span><input type="email" name="monEmail" size="30"><br/>
               <span> Adresse Mail du destinataire </span><input type="email" name="sonEmail" size="30"><br/>
              <span> Message </span><input type="textarea" name="message" size="30"><br/>
                <input class="a1" type="submit" id="submit" name="envoyer" value="Envoyer" size="30"><br/>
            </form>

    </div>
</body>
</html>