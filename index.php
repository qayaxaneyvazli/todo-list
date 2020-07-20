<?php
// git add .
// git commit -m "."
// git push origin master
require __DIR__ . '/system/init.php';
require 'includes/header.php';
if (post('submit')) {

    header("Location:add_task.php");
}
?>
<div class="box-body">
    <form action="" method="post">
        <ul class="todo-list ui-sortable">
            <li>
                <span class="handle ui-sortable-handle">
                    <i class="fa fa-ellipsis-v"></i>
                    <i class="fa fa-ellipsis-v"></i>
                </span>
                <input type="checkbox" value="" name="">
                <span class="text">Kitab oxumaq</span>
                <small class="label label-default"><i class="fa fa-clock-o"></i> 1 ay</small>
                <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                </div>
            </li>
        </ul>
</div>

<div class="box-footer clearfix no-border">
    <input type="hidden" name="submit" value="1">
    <button type="submit" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Tapşırıq əlavə et </button>

</div>
</form>
</div>
</div>
<? require 'includes/footer.php';  ?>