<section>
    <div class="container">
        <h2>Post</h2>
        <a style="text-decoration: none; color: black;" class="btn_create" href="Post/create">Create Post</a>
        <table id="list">
            <tr class="tieude">
                <th>Thứ tự</th>
                <th>tittle </th>
                <th>content</th>
                <th>category</th>
                <th>auth</th>
                <th>Create at</th>
                <th>Action</th>
                <?php
                $i = 0;
                foreach ($data["post"] as $key => $value) {
                    $i++;
                ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $value['tittle'] ?></td>
                <td><a style="color:black;background-color: green" href="Post/showContent/<?php echo $value['id'] ?>">show</a></td>
                <?php
                    foreach ($data["category"] as $key => $value1) {
                        if ($value1['id'] == $value['category_id']) {
                ?>
                        <td><?php echo $value1['name'] ?></td>
                <?php
                        }
                    }
                ?>

                <?php
                    foreach ($data["auth"] as $key => $value2) {
                        if ($value2['id'] == $value['auth_id']) {
                ?>
                        <td><?php echo $value2['fullname'] ?></td>
                <?php
                        }
                    }
                ?>
                <td><?php echo $value['created_at'] ?></td>
                <td>
                    <a style="color:black;background-color: yellow" href="Post/edit/<?php echo $value['id'] ?>">Edit</a>
                    <a style="color:black;background-color: red" href="Post/delete/<?php echo $value['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
                }
        ?>
        </table>
    </div>
</section>