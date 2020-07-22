<?php require 'system/init.php';
      
// her esas sehifede bir defe init php ni include etmeyin besdi basda fso
// basqalarinin icinde neyise cagirma
// iki defe cagirilir.ondada icindeki kodlar iki defe isliyir .
// meselen error verirki session artiq start olub

require 'tasks.php';

if (!get('id')) {
    redirect("index.php");
} else {
    if (post('update')) {
        $ids = get('id');
        $taskname = post('taskname');
        $taskdate = post('taskdeadline');


        if (Tasks::updateTask($taskname, $taskdate, $ids)) {
            redirect("index.php");
        }
        die('yenilenmedi!');
        
   
    }
    $id=get('id');
    $tasks = Tasks::readSpecificTask($id);
        foreach($tasks as $task){



        }
    
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Tapşırığa düzəliş et</title>
</head>

<body>
    <form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
        <h2 class="w3-center">Tapşırığa düzəliş et</h2>

        <div class="w3-row w3-section">

            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <label>Tapşırıq</label>
                <input class="w3-input w3-border" value="<?php echo $task['task_content'] ?>" name="taskname" type="text" placeholder="Tapşırıq">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <label>Son bitmə tarixi</label>
                <input class="w3-input w3-border"  value="<?php echo $task['deadline_time'] ?>"name="taskdeadline" type="date" placeholder="Son tarix">
            </div>
        </div>

        <input type="hidden" name="update" value="1">
        <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Düzəliş et</button>
    </form>
    <a class="btn btn-primary"  href="index.php">Qayıt</a>
</body>

</html>