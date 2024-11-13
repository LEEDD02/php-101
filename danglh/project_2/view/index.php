<a href="?action=create">Add</a>
<table width=100%>
  <tr>
    <td>Id</td>
    <td>Name</td>
  </tr>
  <?php foreach($arr as $each) {?>
  <tr>
    <td><?=$each->GetId()?></td>
    <td><?=$each->GetName()?></td>
    <td><a href="?action=edit&&id=<?=$each->GetId()?>">Edit</a></td>
    <td><a href="?action=delete&&id=<?=$each->GetId()?>">Delete</a></td>
  </tr>
  <?php }?>
</table>
