<a href="index.php">Home</a>
<a href="?action=create&&controller=students">Add</a>
<table>
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Class</td>
  </tr>
  <?php foreach ($arr as $each){?>
  <tr>
    <td><?=$each->GetId()?></td>
    <td><?=$each->GetName()?></td>
    <td><?=$each->GetClassName()?></td>
    <td><a href="?action=edit&controller=students&id=<?=$each->GetId()?>">Edit</a></td>
    <td><a href="?action=delete&controller=students&id=<?=$each->GetId()?>">Delete</a></td>
  </tr>
  <?php }?>
</table>
