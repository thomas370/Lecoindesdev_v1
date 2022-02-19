
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/New.css">
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
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="New.php">News</a></li>
                </ul>
            </nav>
        </div>
    </header>
        <section id="main-image">
            <div class="wrapper">
                <h2>News</h2>
            
            </div>
        </section>
<section id="new">

                <?php 
                                // Set API access key 
                    $queryString = http_build_query([ 
                        'access_key' => '64460511698ee33f8535e1f114606bd4', 
                        'country' => 'us',
                        'categories' =>'technology',
                        'sources'=>'bbc'

                    ]); 
                    
                    // API URL with query string 
                    $apiURL = sprintf('%s?%s', 'http://api.mediastack.com/v1/news', $queryString); 
                    
                    // Initialize cURL 
                    $ch = curl_init(); 
                    
                    // Set URL and other appropriate options 
                    curl_setopt($ch, CURLOPT_URL, $apiURL); 
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                    
                    // Execute and get response from API 
                    $data = curl_exec($ch); 
                                if($data === false) {
                                    var_dump(curl_error($ch));
                                }

                    
                    // Close cURL 
                    curl_close($ch);

                    

                    
                
                ?>
                <?php
                $json = json_decode($data);
                for ($i=0;$i < 10; $i++){
                            echo"<div class='container4'>";
                            echo"<a  target='_blank' href='{$json->data[$i]->url}'>";
                            echo"<div class='card5'>";
                            echo"<img src='images/LeCoin-03.jpg'alt='logocours'style='height: 200px; width: 280px;'>";
                            echo"<div class='item11'>";
                            echo "<h4 id='dataname'>{$json->data[$i]->title}</h4>"; echo"<br>"; echo "<p id='dataname1'style='margin: 0 10px; margin-top: -20px; ';>{$json->data[$i]->description}</p>"; echo"<br>"; echo "<p id='dataname1'style='margin: -10px 10px ';>{$json->data[$i]->source}</p>";
                            echo" </div> ";
                            echo" </div> ";
                            echo"</a>";
                            echo" </div> ";
                        }
                ?>
                </div>
        </div>
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