<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <title>PHP-Ajax-Dischi</title>
    </head>
<body>
    <?php  include_once __DIR__ . '/server/data.php'; ?>
        <main id="app">
            <div class="post" v-for="post in posts">
                <img :src="post.poster" :alt="post.title"></img>
                <h1>{{ post.title }}</h1>
                <h3>{{ post.author }}</h3>
                <p>{{ post.year }}</p>
            </div>
        </main>

    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>




