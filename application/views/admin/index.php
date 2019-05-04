<p style="display: inline; padding: 4px">Dash</p><a href="admin/add" class="c">Add new user</a>
<hr  size="3"; color="black" ">

<?php foreach ($news as $val): ?>
	<p><?php echo $val['name']; ?></p>
	<p><?php echo $val['email']; ?></p>
	<p><?php echo $val['country']; ?></p>
    <a href="/admin/drop/<?php echo $val['id']?>" class="c">Drop user</a>
    <a href="/admin/edit/<?php echo $val['id']?>" class="c">Edit user</a>
	<hr>
<?php endforeach; ?>