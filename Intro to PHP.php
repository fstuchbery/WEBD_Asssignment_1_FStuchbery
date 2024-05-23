<?php

/*******w******** 
    
    Name: Finn Stuchbery
    Date: May 17th 2024
    Description: Making an image website: it shows photography and links to the photographers

****************/

$config = [

    'gallery_name' => 'Finnigans Gallery',
 
    'unsplash_categories' => ['Water','Urban','Nature','Candy','Bears','Beer','Food','Graffiti'],
 
    'local_images' => ['new_image_1.png','new_image_2.png','new_image_3.png','new_image_4.png']
 
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>

        <?php
            echo $config['gallery_name'];
        ?>
    </title>
</head>


<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->

   

            <h1 id = first_header> 
            <?php
                echo $config['gallery_name'];
            ?>
            </h1>


    

        <div  id = top_heads>
        <?php 
                for($i = 0; $i < 4; $i++) {
                    echo "<h2 class = smalll_heads> {$config['unsplash_categories'][$i]}    </h2>  ";
                }
                ?>
        </div>



    
        <div id = poop>
            <?php
                for($i = 0; $i < 4; $i++){
                    echo  "<img src=" . "https://source.unsplash.com/300x200/?". $config['unsplash_categories'][$i] . " alt = ".  $config['unsplash_categories'][$i] . " >"  . "    ";
                }
            ?>
        </div>

                
                
            <div  id = middle_heads>
                <?php 
                for($i = 4; $i < 8; $i++) {
                    echo "<h2 class = smalll_heads> {$config['unsplash_categories'][$i]}    </h2>  ";
                }
                ?>
            </div>

            
        <div id = poop2>
            <?php
                for($i = 4; $i < 8; $i++){
                    echo "<img class = imagges src=" . "https://source.unsplash.com/300x200/?". $config['unsplash_categories'][$i] . "   alt = ".  $config['unsplash_categories'][$i] . " >"  . "    ";
                }
            ?>
        </div>




            <h1 id = second_header> 
            <?php
                echo count($config['local_images']) . ' Large Images';
            ?>
            </h1>


                <?php
                    $config['photographer_names'] = array('Marl McNeill','Andreas Weilguny','Marc Thunis','Nathan Anderson');
                    $config['photographer_URL'] = array('https://unsplash.com/@markmcneillphotography','https://unsplash.com/@aweilguny','https://unsplash.com/@cyrus_smith','https://unsplash.com/@nathananderson');
                ?>

                

                

                <div id = lastDiv>
                <?php
                for($var = 0;$var < 4;$var++) {
                    echo  "<img  src = " .  " {$config['local_images'][$var]}  " . "  alt = 'pop'  >";
                    echo "<a href =  {$config['photographer_URL'][$var]} class = anchors> {$config['photographer_names'][$var]} </a>";
                }

                ?>


                </div>    





















</body>
</html>