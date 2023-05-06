<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Update Task</title>

    <style>
    body {
        background-image: url('https://i.imgur.com/w16HASj.png');
        background-size: cover;
        background-position: center;
        color: #fff;
        font-family: Arial, sans-serif;
        font-size: 20px;
        line-height: 1.5;
        height: 100vh;
    }
    
    .container {
        margin-top: 3%;
        max-width: 1200px;
        height: 670px;
        background-color: rgba(0,0,0,0.6);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
    }

    h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 2rem;
    }

    label.form-label {
        color: #fff;
        font-size: 1.5rem;
        font-weight: bold;
    }
    
    .btn-submit {
        width: 150px;
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 20px;
        font-weight: bold;
        margin-top: 15px;
        background-color: #1f4bf1;
        border: none;
        color: white;
        margin-right: 20px;
        transition: background-color 0.3s ease-in-out;
    }
    
    .btn-submit:hover {
        background-color: #0d2fb2;
    }
</style>

</head>

<body>
    <h1 class="text-center mt-5">Edit Task</h1>
    <div class="container">
        <form action="<?= $GLOBALS['site_url'] ?>/update" method="POST">
            <input type="hidden" name="id" value="<?=$task['id']?>">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" style="font-size: 1.5rem;" placeholder="Title" value="<?=$task['title']?>" >
            </div>
            <br>
            <div class="mb-3">
                <label for="task" class="form-label">Tasks</label>
                <textarea class="form-control" id="task" rows="10" name="task" style="font-size: 1.3rem;"><?=$task['task']?></textarea>
            </div>
            <button type="submit" class="btn btn-submit">Submit</button>
        </form>
    </div>
</body>


</html>