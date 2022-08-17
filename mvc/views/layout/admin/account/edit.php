<?php
foreach ($data["acId"] as $key => $value) {
?>
   <h2>Edit Account</h2>
   <form class="CU" id="editAccount" method="POST" action="<?php echo $value["id"]  ?>">
      <label for="fname">fullname Account</label>
      <input type="text" name="fullname" value="<?php echo $value['fullname'] ?>">
      <label for="fname">email Account</label>
      <input type="email" name="email" value="<?php echo $value['email'] ?>">
      <label for="fname">password Account</label>
      <input type="password" name="password" value="<?php echo $value['password'] ?>">
      <label for="fname">Role Account</label>
      <select name="role" id="role">
         <option value="1">User</option>
         <option value="0">Admin</option>
      </select>
      <input class="sua" type="submit" value="Sửa" name="editAccount">
   </form>
<?php
}
?>