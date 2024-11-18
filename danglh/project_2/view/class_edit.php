<form action="?action=update&&controller=classes" method="post">
  <input type="hidden" name="id" value="<?=$object->GetId()?>">
  Class Name
  <input type="text" name="class_name" value="<?=$object->GetClassName()?>">
  <button>Save</button>
</form>
