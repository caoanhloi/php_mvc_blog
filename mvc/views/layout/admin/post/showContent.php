<h1>Content Post</h1>
<?php
foreach ($data["content"] as $key => $value) {
?>
    <div class="show_content">
        <?php echo $value["content"]; ?>
    </div>
<?php
}
?>