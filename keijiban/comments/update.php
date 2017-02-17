<?php
session_start();
$comment_id = $_GET['comment_id'];
?>
<form action='update.create.php' method="post">
<input type="hidden" name="comment_id" value="<?php echo $comment_id;?>">
<input type="hidden" name="token" value="<?php echo $_SESSION['ID'];?>">
<textarea name='new_content' rows="4" cols="40"></textarea>
<p><input type="submit" value="edit"></p>
</form>

<form action='delete.php' method="post">
<input type="hidden" name="comment_id" value="<?php echo $comment_id;?>">
<input type="hidden" name="token" value="<?php echo $_SESSION['ID'];?>">
<p><input type="submit" value="delete"></p>
</form>

