<?php
// git add .
// git commit -m "."
// git push origin master
require __DIR__ . '/system/init.php';
require 'includes/header.php';
require 'tasks.php';
$date = date('m/d/Y');
$taskstatus = 'Yerinə yetirildi';

if (post('end')) {

    $id = post('number');
    $update = Tasks::updateStatus($date, $taskstatus, $id);
    if ($update) {
        header("Location:index.php");
    }
}


$read = Tasks::readTask();


?>


<div class="box-body">
    <form action="" method="post">
        <ul class="todo-list ui-sortable">
            <?php foreach ($read as $red) : ?>
                <li>
                    <span class="handle ui-sortable-handle">
                        <span class="<?php echo strtotime($red['deadline_time']) > strtotime($date) ? 'badge badge-pill badge-success' : 'badge badge-pill badge-danger' ?>"><?php echo 'Son Tarix :' . $red['deadline_time'] ?></span>
                    </span>
                    <input class="single-checkbox" type="checkbox" value="<?php echo $red['task_id'] ?>" name="number">
                    <span class="text"><?php echo $red['task_content'] ?></span>
                    <small class="<?php echo in_array('Gözləmədə', $red) ? 'label label-default' : 'label label-success' ?>"></i> <?php echo $red['task_status'] ?><i class="<?php echo in_array('Gözləmədə', $red) ? 'fa fa-clock-o' : '' ?>"></small></i>
                    <div class="tools">
                        <a href="edit.php?id=<?php echo $red['task_id']; ?>" class="fa fa-edit">Düzəliş et</a>
                        <a href="delete.php?id=<?php echo $red['task_id']; ?>" class="fa fa-edit">Sil</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
</div>

<div class="box-footer clearfix no-border">
    <a href='add_task.php'><i class="fa fa-plus"></i> Tapşırıq əlavə et </a>
</div>
<div class="box-footer clearfix no-border">
    <input type="hidden" value="1" name="end">
    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Bitir</button>
</div>
</form>

</div>
</div>
<? require 'includes/footer.php';  ?>