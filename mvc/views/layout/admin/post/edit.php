<?php
foreach ($data["postId"] as $key => $value) {
?>
   <h3>Edit Post</h3>
   <form class="CU" id="editPost" method="POST" action="<?php echo $value["id"]  ?>">
      <label for="fname">Tittle</label>
      <input type="text" name="tittle" value="<?php echo $value['tittle'] ?>">

      <label for="fname">content</label>
      <textarea name="content" id="content"><?php echo $value['content'] ?></textarea>
      <script>
         CKEDITOR.replace('content');
      </script>
      <br>
      <label for="fname">Category</label>
      <select name="category_id">
         <?php
         foreach ($data["category"] as $key => $value1) {
            if ($value1['id'] == $value['id']) {
         ?>
               <option selected value="<?php echo $value1['id'] ?>"><?php echo $value1['name'] ?></option>
            <?php
            } else {
            ?>
               <option value="<?php echo $value1['id'] ?>"><?php echo $value1['name'] ?></option>
         <?php
            }
         }
         ?>
      </select>
      <br>
      <br>

      <label for="fname">Auth</label>
      <select name="auth_id">
         <?php
         foreach ($data["auth"] as $key => $value2) {
            if ($value2['id'] == $value['id']) {
         ?>
               <option selected value="<?php echo $value2['id'] ?>"><?php echo $value2['fullname'] ?></option>
            <?php
            } else {
            ?>
               <option value="<?php echo $value2['id'] ?>"><?php echo $value2['fullname'] ?></option>
         <?php
            }
         }
         ?>
      </select>
      <input class="sua" type="submit" value="Sửa" name="editPost">
   </form>
<?php
}
?>