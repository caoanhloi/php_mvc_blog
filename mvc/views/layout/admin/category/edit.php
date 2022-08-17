<?php
foreach ($data["catId"] as $key => $value) {
?>
   <h2>Edit Category</h2>
   <form class="CU" id="editCategory" method="POST" action="<?php echo $value["id"]  ?>">
      <label for="fname">Name Category</label>
      <input type="text" name="name" value="<?php echo $value['name'] ?>">
      <input class="sua" type="submit" value="Sửa" name="editCategory">
   </form>
<?php
}
?>