<?php
require 'system/init.php'; // birinci init require olmalidi. yaddan cixamsin
require 'tasks.php';
if(post('submit')){

    $taskname=post('taskname');
    $taskdate=post('taskdeadline');
    $createdby=$_SESSION['user'];
    $taskstatus='Gözləmədə';
 
    $db=Tasks::createTask($taskname,$createdby,$taskdate,$taskstatus);
    if($db){

        header('Location:index.php');
    }
    

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Tapşırıq əlavə et</title>
</head>
<body>
    <form action=""  method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
        <h2 class="w3-center">Yeni tapşırıq əlavə et</h2>

        <div class="w3-row w3-section">

            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <label>Tapşırıq</label>
                <input class="w3-input w3-border" name="taskname" type="text" placeholder="Tapşırıq">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <label>Son bitmə tarixi</label>
                <input class="w3-input w3-border" name="taskdeadline" type="date" placeholder="Son tarix">
            </div>
        </div>

        <input type="hidden" name="submit" value="1">
        <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Əlavə et</button>
 </form>
</body>
</html>