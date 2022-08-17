<section>
    <div class="container">
        <h2>Category</h2>
        <a style="text-decoration: none; color: black;" class="btn_create" href="Category/create">Create Category</a>
        <table id="list">
            <tr class="tieude">
                <th>Thứ tự</th>
                <th>Name Category</th>
                <th>Action</th>
                <?php
                $i = 0;
                foreach ($data["cat"] as $key => $value) {
                    $i++;
                ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $value['name'] ?></td>
                <td>
                    <a style="color:black;background-color: yellow" href="Category/edit/<?php echo $value['id'] ?>">Edit</a>
                    <a style="color:black;background-color: red" href="Category/delete/<?php echo $value['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
                }
        ?>
        </table>
    </div>
</section>