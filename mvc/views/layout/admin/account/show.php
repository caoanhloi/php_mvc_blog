<section>
    <div class="container">
        <h2>Acount</h2>
        <a style="text-decoration: none; color: black;" class="btn_create" href="Account/create">Create Account</a>
        <table id="list">
            <!-- <a style="color:black;background-color: green" href="Account/create">Create</a> -->
            <tr class="tieude">
                <th>STT</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Action</th>
                <?php
                $i = 0;
                foreach ($data["ac"] as $key => $value) {
                    $i++;
                ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $value['fullname'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['password'] ?></td>
                <td><?php if ($value['role'] == 1) {
                        echo 'User';
                    } else {
                        echo 'Admin';
                    }
                    ?>
                <td>
                    <a style="color:black;background-color: yellow" href="Account/edit/<?php echo $value['id'] ?>">Edit</a>
                    <a style="color:black;background-color: red" href="Account/delete/<?php echo $value['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
                }
        ?>
        </table>
    </div>
</section>