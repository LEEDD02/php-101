<h1>Student List</h1>
<a href="?action=create">Add student</a>
<table width="100%">
  <tr>
    <td>ID</td>
    <td>Student Name</td>
  </tr>
  <?php foreach ($result as $item) { ?>
  <tr>
    <td><?=$item['id']?></td>
    <td><?=$item['name']?></td>
    <td><a href="?action=edit&&id=<?=$item['id']?>">Edit</a></td>
    <td><a href="?action=delete&&id=<?=$item['id']?>">Delete</a></td>
  </tr>
  <?php }?>
</table>
