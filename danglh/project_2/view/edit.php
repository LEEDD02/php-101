<form action="?action=update" method="post">
  <input type="hidden" name="id" value="<?=$object->GetId()?>">
  Name
  <input type="text" name="name" value="<?=$object->GetName()?>">
  <button>Save</button>
</form>
