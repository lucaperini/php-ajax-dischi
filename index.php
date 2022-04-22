<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <title>PHP-Ajax-Dischi</title>
    </head>
<body>
    <?php  include_once __DIR__ . '/server/data.php'; ?>
    <?php  include_once __DIR__ . '/partials/header.php'; ?>
        <main id="app">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center justify-content-center d-flex flex-wrap">
                <div class="card" v-for="post in posts">
                    <img class="card-img-top p-2" :src="post.poster" :alt="post.title">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{post.title}}</h5>
                        <p class="card-text d-inline-block">{{post.author}}</p>
                        <p class="small-text">{{post.year}}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>  
</main>
            
        
        
        
        

    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>




