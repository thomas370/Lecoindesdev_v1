
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/tutos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Coin Des développeurs</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1><a href="index.php">Le Coin Des Developpeurs</a></h1>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="Tutos.php">Tutos</a></li>
                    <li><a href="index.php">Contact</a></li>
                    <li><a href="New.php">News</a></li>
                </ul>
            </nav>
        </div>
    </header>
        <section id="main-image">
            <div class="wrapper">
                <h2> Nos Tutos / DOCS</h2>
            
            </div>
        </section>

        <section>
        <div class="container4">
        <?php 
                                
                                $curl = curl_init('https://thomasbortolato.nohost.me/bookstack/api/books');
                                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true) ;
                                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                                    'Authorization: Token ke1so6K1aHr5nqQGhaxLXSyuCAbXY0TA:VQjHO1aJttv1VRJaWBBNxwVG34PeAqGM' 
                                    ]);
                                $data = curl_exec($curl);
                                if($data === false) {
                                    var_dump(curl_error($curl));
                                }

                                curl_close($curl);
                    ?>
               <?php
                    $json = json_decode($data);
                    for ($i=0;$i < $json->total; $i++)
                    {
                        if($i > 8) {
                            echo"<div class='container4'>";
                            echo"<a  target='_blank' href='https://thomasbortolato.nohost.me/bookstack/books/{$json->data[$i]->slug}'>";
                            echo"<div class='card5'>";
                            echo"<img src='images/LeCoin-03.jpg'alt='logocours'style='height: 130px; width: 240px; margin: 5px 5px; border-radius: 5%;'>";
                            echo"<div class='item11'>";
                            echo "<h3 id='dataname'>{$json->data[$i]->name}</h3>"; echo"<br>"; echo "<p id='dataname1'>{$json->data[$i]->description}</p>";
                            echo" </div> ";
                            echo" </div> ";
                            echo"</a>";
                            echo" </div> ";
                        }
                        else {
                        echo"<div class='container4'>";
                        echo"<a  target='_blank' href='https://thomasbortolato.nohost.me/bookstack/books/{$json->data[$i]->slug}'>";
                        echo"<div class='card'>";
                        echo"<img src='images/LeCoin-03.jpg'alt='logocours'style='height: 130px; width: 240px; margin: 5px 5px; border-radius: 5%;'>";
                        echo"<div class='item11'>";
                        echo "<h3 id='dataname'>{$json->data[$i]->name}</h3>"; echo"<br>"; echo "<p id='dataname1'>{$json->data[$i]->description}</p>";
                        echo" </div> ";
                        echo" </div> ";
                        echo"</a>";
                        echo" </div> ";
                        
                       }    
                     } 
                     
                 ?>
</div>
        </section>


        <footer>  
        <div class="wrapper">
            <div class="container3">
                <div class="text1">
                    <h3>Service</h4>
                    <ul>
                        <a href="Tutos.html"><li><strong>Tutos</strong></li></a>
                        <a href="#"><li><strong>entraides</strong></li></a>
                    </ul>
                </div>

                <div class="text3">
                    <h3>Le Coin Des Developpeurs</h4>
                    <p><strong>Le sujet principale de ce serveur est l'entraide sur divers langage. Vous pourrez demander de l'aide ou apporter votre expérience en aidant</strong></p>
                </div>
            </div>
        </div>
            <p class="copyright">Le Coin Des Developpeurs © 2022</p>
            
        </footer>
</body>
</html>