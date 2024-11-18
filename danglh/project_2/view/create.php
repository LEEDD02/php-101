<form action="?action=store&&controller=students" method="post">
  Name
  <input type="text" name="name">
  Class
  <select name="class_id">
    <?php foreach ($class as $each) {?>
    <option value="<?=$each->GetId()?>"><?=$each->GetClassName()?></option>
    <?php }?>
  </select>
  <button>Add</button>
</form>
