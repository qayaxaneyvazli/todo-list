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
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        <input type="hidden" name="update" value="1">
        <button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Düzəliş et</button>
    </form>
</body>

</html>