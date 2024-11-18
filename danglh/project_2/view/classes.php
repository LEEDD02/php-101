<a href="index.php">Home</a>
<a href="?action=create&&controller=classes">Add</a>
<table>
  <tr>
    <td>Id</td>
    <td>Class Name</td>
  </tr>
  <?php foreach ($arr as $each){?>
  <tr>
    <td><?=$each->GetId()?></td>
    <td><?=$each->GetClassName()?></td>
    <td><a href="?action=edit&controller=classes&id=<?=$each->GetId()?>">Edit</a></td>
    <td><a href="?action=delete&controller=classes&id=<?=$each->GetId()?>">Delete</a></td>
  </tr>
  <?php }?>
</table>
