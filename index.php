<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>PHP DISCHI</title>
</head>
<body>
    <!-- header -->
    <header>
        <?php include "__DIR__" . "/../components/header.php"; ?>
    </header>
    <!-- /header -->

    <!-- main -->
    <main id="root">
        <h3>PHP</h3>
        <?php include "__DIR__" . "/../components/main.php"; ?>
        <h3>VUE</h3>
        <div class="container">
            <div class="card" v-for="item in database">
                <div class="img">
                    <img :src="item.poster" :alt="item.title">
                </div>
                <div class="info">
                    <h2>{{ item.title }}</h2>
                    <p>{{ item.author }}</p>
                    <p>{{ item.year }}</p>
                </div>
            </div>
        </div>
    </main>
    <!-- /main -->

    <!-- script -->
    <script src="./js/script.js"></script>
    <!-- /script -->
</body>
</html>