<section>
    <div class="container">
        <div class="col-md-10 list_content">
            <div class="content">
                <?php
                foreach ($data["postCat"] as $key => $value) {
                ?>
                    <p><?php
                        foreach ($data["auth"] as $key => $value2) {
                            if ($value2['id'] == $value['auth_id']) {
                        ?>
                            Author: <?php echo $value2['fullname'] ?>
                        <?php
                            }
                        }
                        ?>
                        / Time: <?php echo $value['created_at'] ?>
                    </p>
                    <a href="../showPost/<?php echo $value['id'] ?>">
                        <h2><?php echo $value['tittle'] ?></h2>
                    </a>
                    <div class="an">
                        <?php echo $value['content'] ?>
                    </div>
                    <i class="fa-solid fa-eye"> <?php echo $value['view_count'] ?></i>
                    <hr>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-md-2 sub_menu">
            <h3>Category</h3>
            <?php
            foreach ($data["category"] as $key => $value1) { ?>
                <a href="../showPostCategory/<?php echo $value1['id'] ?>"><?php echo $value1['name'] ?></a>
            <?php
            }
            ?>
            <h3>Author</h3>
            <?php
            foreach ($data["auth"] as $key => $value2) { ?>
                <a href=""><?php echo $value2['fullname'] ?></a>
            <?php
            }
            ?>
        </div>
    </div>
</section>