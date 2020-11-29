<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>docker-compose</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap');
        .page-container{
            color: #222222;
            min-height: 50vh;
            display: flex;
            justify-content: center;
        }
        .page{
            font-family: 'Sarabun';
        }
        .page h1{
            font-size: 160px;
            margin: 0;
        }
        .page p{
            font-size: 56px;
        }
        .center{
        }
        .center table{
            padding: 0 auto;
        }
    </style>
</head>
<body>
    <div class="page-container">
        <div class="page">
            <h1>docker-compose</h1>
            <p>Ernest Grzeszczak 7.3/5 88694</p>
            <p>mysql-client: 
                <?php 
                    if($link = mysqli_connect('mysql5', 'admin', 'admin')){
                        echo "<span style='color: green'>".$link->client_info."</span>";
                    } else {
                        echo "ERROR";
                    }
                ?>
            </p>
            <p>
                phpversion:     
                <?php
                    // PHP Check
                    echo "<span style='color: green'>".phpversion()."</span>";;
                ?>  
            </p>
        </div>
    </div>

</body>
</html>