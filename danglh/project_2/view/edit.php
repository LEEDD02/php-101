<form action="?action=update&&controller=students" method="post">
  <input type="hidden" name="id" value="<?=$object->GetId()?>">
  Name
  <input type="text" name="name" value="<?=$object->GetName()?>">
  Class
  <select name="class_id">
    <?php foreach ($class as $each) {?>
    <option value="<?=$each->GetId()?>" <?php if($each->GetId()==$object->GetClassId()) {echo 'selected';}
    ?>>
      <?=$each->GetClassName()?>
    </option>
    <?php }?>
  </select>
  <button>Save</button>
</form>
