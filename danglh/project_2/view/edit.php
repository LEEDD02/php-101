<form action="?action=update" method="post">
  <input type="hidden" name="id" value="<?=$arr->GetId()?>">
  Name
  <input type="text" name="name" value="<?=$arr->GetName()?>">
  <button>Save</button>
</form>
