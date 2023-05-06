<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>View ALl Tasks</title>

    <style>
        body {
            background-image: url("https://i.imgur.com/w16HASj.png"); 
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            font-family: sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .title {
            text-align: center;
            font-size: 3rem;
            text-shadow: 2px 2px #000;
            margin-bottom: 30px;
        }
        .task {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            font-size: 18px;
            border-radius: 10px;
            margin-bottom: 25px;
            margin-top: 25px;
            text-align: justify;
            line-height: 1.5;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .heading {
            text-align: left;
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .hr {
            border: none;
            border-top: 2px solid #fff;
            margin-bottom: 20px;
        }

        .btn-add-task {
            background-color: #ffffff;
            border: none;
            border-radius: 50%;
            padding: 12px;
            font-size: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
        }

        .btn-add-task:hover {
            background-color: #dcdcdc;
        }

        .btn-add-task i {
            color: #000000;
            font-size: 2.5rem;
        }


        .btn-edit,
        .btn-delete{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            padding: 12px;
            font-size: 20px;
            font-weight: bold;
            border: none;
            color: white;
            margin-right: 15px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-edit{
            background-color: #1f4bf1;
        }
        .btn-edit:hover{
            background-color: #0d2fb2;
        }

        .btn-delete{
            background-color: #ff2323; 
        }
        .btn-delete:hover{
            background-color: #d50909;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="heading">To-do List</h1>
        <hr class="hr">
        <a href="<?= $GLOBALS['site_url'] ?>/add" class="btn btn-add-task"><i class="bi bi-plus-circle"></i></a>
        
        <?php foreach ($tasks as $task): ?>
            <div class="task">
                <h2>
                    <?php echo $task['title']; ?>
                </h2>
                <p>
                    <?php echo nl2br($task['task']); ?>
                </p>
                <div>
                    <a href="<?= $GLOBALS['site_url'] ?>/edit/<?php echo $task['id']; ?>" class="btn btn-edit"><i class="bi bi-pencil"></i></a>
                    <a href="<?= $GLOBALS['site_url'] ?>/delete/<?php echo $task['id']; ?>" class="btn btn-delete"><i class="bi bi-trash"></i></a>
                </div>
            </div>
                
            <hr>
        <?php endforeach; ?>
    </div>
</body>


</html>