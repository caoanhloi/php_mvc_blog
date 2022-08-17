<h2>Add Post</h2>
<form class="CU" id="addPost" action="create" method="POST">
  <label for="fname">tittle</label>
  <input type="text" name="tittle">
  <label for="fname">content</label>
  <textarea name="content" id="content"></textarea>
  <script>
    CKEDITOR.replace('content');
  </script>
  <label for="fname">Category</label>
  <select name="category_id">
    <?php
    foreach ($data["category"] as $key => $value) {
    ?>
      <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
    <?php
    }
    ?>
  </select>
  <br>
  <br>
  <label for="fname">Auth</label>
  <select name="auth_id">
    <?php
    foreach ($data["auth"] as $key => $value2) {

    ?>
      <option value="<?php echo $value2['id'] ?>"><?php echo $value2['fullname'] ?></option>
    <?php
    }
    ?>
  </select>
  <input class="sua" type="submit" value="Add" name="addPost">
</form>