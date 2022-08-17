<div class="big_content">
    <?php
    foreach ($data["postId"] as $key => $value) {
    ?>
        <h1><?php echo $value['tittle'] ?></h1>
        <div class="main_post">
            <?php echo $value['content'] ?>
        </div>
        <div class="tt">
            <?php
            foreach ($data["auth"] as $key => $value2) {
                if ($value2['id'] == $value['auth_id']) {
            ?>
                    Author:<?php echo $value2['fullname'] ?>
            <?php
                }
            }
            ?>
            <br>
            <?php
            foreach ($data["category"] as $key => $value1) {
                if ($value1['id'] == $value['auth_id']) {
            ?>
                    Category: <?php echo $value1['name'] ?>
            <?php
                }
            }
            ?>
            <br>
                    Time create: <?php echo $value['created_at'] ?>
            <br>
            <i class="fa-solid fa-eye"> <?php echo $value['view_count'] ?></i>
        </div>
        <br>

    <?php
    }
    ?>
</div>