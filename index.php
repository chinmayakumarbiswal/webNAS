<?php
    $user=$_GET['u'];
    $pass=$_GET['s'];
    if($user == "situFtp" && $pass == "123"){

    }else{
        echo"<script>alert('Use your password');window.location.href = 'https://chinmayakumarbiswal.in/';</script>";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <style>
        div.gallery {
        border: 1px solid #ccc;
        }

        div.gallery:hover {
        border: 1px solid #777;
        }

        div.gallery img {
        width: 100%;
        height: auto;
        }

        div.desc {
        padding: 15px;
        text-align: center;
        }

        * {
        box-sizing: border-box;
        }

        .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
        }

        @media only screen and (max-width: 500px) {
        .responsive {
            width: 100%;
        }
        }

        .clearfix:after {
        content: "";
        display: table;
        clear: both;
        }
    </style>
</head>
<body>
    <?php
        foreach (array_filter(glob('./storage/*'), 'is_file') as $file)
        {
            if(substr($file,-3) == "png" || substr($file,-3) == "jpg" || substr($file,-3) == "peg" || substr($file,-3) == "PNG" || substr($file,-3) == "JPG" || substr($file,-3) == "PGE" ){
                ?>
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="<?=$file?>">
                            <img src="<?=$file?>" alt="<?=$file?>" width="600" height="400">
                            </a>
                            <div class="desc"><?=$file?></div>
                        </div>
                    </div>
                <?php
            }
            elseif(substr($file,-3) == "mp4" || substr($file,-3) == "mov" || substr($file,-3) == "MP4"){
                ?>
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="<?=$file?>">
                            <img src="./extra/video.png" alt="<?=$file?>" width="600" height="400">
                            </a>
                            <div class="desc"><?=$file?></div>
                        </div>
                    </div>
                <?php
            }else{
                ?>
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="<?=$file?>">
                                <img src="./extra/download.webp" alt="<?=$file?>" width="600" height="400">
                            </a>
                            <div class="desc"><?=$file?></div>
                        </div>
                    </div>
                <?php
            }
        }
    ?>
    
</body>
</html>