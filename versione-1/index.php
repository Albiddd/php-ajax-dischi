<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <?php
    include __DIR__ . '/../albums.php'
    ?>

    <header>
        <img src="../logo.svg" alt="">
    </header>

    <main>
        <div class="container">
            <div class="card-wrapper">
                <?php
                foreach($albums as $album){

                ?>
                <div class="">
                    <div class="card text-center">
                        <img src="<?= $album['poster'] ?>" class="card-img-top" alt="<?= $album['title'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                <div class="font-weight-bold text-monospace h5" >
                                    <?= $album['title'] ?>
                                </div> 
                                <div>
                                    <?= $album['author'] ?>
                                </div> 
                                <div>
                                    <?= $album['year'] ?>
                                </div>     
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>