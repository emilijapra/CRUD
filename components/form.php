<form action="" method="post" class=>

<div class="form-group">
    <label for="f1">Product Name</label>
    <input type="text" name="name" id="f1" class="form-control" value="<?= ($edit)? $ikea->name : "" ?>">
</div>
<div class="form-group">
    <label for="f2">Product Category</label>
    <input type="text" name="category" id="f2" class="form-control" value="<?= ($edit)? $ikea->category : "" ?>">
</div>

<div class="form-group">
    <label for="f3">Product Price</label>
    <input type="number" step=".01" name="price" id="f3" class="form-control" value="<?= ($edit)? $ikea->price : "" ?>">
</div>

<div class="form-group">
    <label for="f4">About Product</label>
    <textarea name="about" cols="68" rows="5" id="f4" class="form-control"> <?= ($edit)? $ikea->about : "" ?> </textarea>
</div>
<?php if($edit){ ?>
    <input type="hidden" name="id" value="<?=$ikea->id?>">
    <button type="submit" name="update" class="btn btn-success mt-3 mb-3">Update</button>
<?php } else { ?>
    <button type="submit" name="save" class="btn btn-primary mt-3 mb-3">Save</button>
<?php } ?>

     </form>