<?php session_start();
    include "../../path.php";
    include "../../app/controllers/topics.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8b3408cd41.js" crossorigin="anonymous"></script>

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>My blog</title>
  </head>
  <body>

    <!--header start-->
    <?php include("../../app/include/header-admin.php"); ?>
    <!--header end-->

    <div class="container">
        <?php include "../../app/include/sidebar-admin.php"; ?>
            
            <div class="posts col-9">
                <div class="button row">
                    <a href="<?php echo BASE_URL . "admin/topics/create.php";?>" class="col-3 btn btn-dark">Создать</a>
                    <span class="col-1"></span>
                    <a href="<?php echo BASE_URL . "admin/topics/index.php";?>" class="col-3 btn btn-secondary">Редактировать</a>
                </div>
                <div class="row title-table">
                    <h2>Обновление категории</h2>
                </div>
                <div class="row add-post">
                    <div class="mb-12 col-12 col-md-12 err">
                        <p><?=$?></p>
                    </div>

                    <form action="edit.php" method="post">
                        <input name="id" value="<?=$id;?>" type="hidden">
                        
                        <div class="col">
                            <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Название категории" aria-label="Название категории">
                        </div>
                        <div class="col">
                            <label for="content">Описание категории</label>
                            <textarea name="description" class="form-control" id="content" rows="3"><?=$description;?></textarea>
                        </div>
                        <div class="col">
                            <button name="topic-edit" class="btn btn-primary" type="submit">Обновить  категорию</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <!--footer start-->
    <?php include("../../app/include/footer.php"); ?>
    <!--footer end-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>