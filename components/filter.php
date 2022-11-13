<form action="" method="get" class="row mt-4 mb2">
     <div class=".col-2"></div>
     <div class=".col-2">
        <div claass="row">

        </div>
    </div>
       <div class=".col-3">
     <label for="cars">Choose:</label>

    <select class="form-select" name="filter">
        <option value="">Visi</option>

        <?php foreach ($params as $key => $params) { ?>
        <option <?= (isset($_GET["filter"])) ? ($_GET["filter"] == $params) ? "selected" : "" : "" ?> value="<?= $params?>"><?= $params?></option>
        <?php } ?>
    </select>
    </div>

    <div class=".col-3">
        <label for="cars">Filter:</label>
        <div class="row">
        <div class=".col-6">
            <div class="form-group">
            <input type="text" name="from" class="form-control" value="<?=(isset($_GET["from"])) ? $_GET["from"] : "" ?> "> 
        </div>
        </div>
        <div class=".col-6">
            <div class="form-group">
            <input type="text" name="to" class="form-control" value="<?=(isset($_GET["to"])) ? $_GET["to"] : "" ?> ">
        </div>
        </div>
        
    </div>
</div>

<div class=".col-3">
<label for="cars">Sort:</label>

    <select class="form-select" name="sort">
    <option value="0">---</option>
    <option <?= (isset($_GET["sort"])) ? ($_GET["sort"] == 1) ? "selected" : "" : "" ?> value="1">price 0-9</option>
    <option <?= (isset($_GET["sort"])) ? ($_GET["sort"] == 2) ? "selected" : "" : "" ?> value="2">price 9-0</option>
    <option <?= (isset($_GET["sort"])) ? ($_GET["sort"] == 3) ? "selected" : "" : "" ?> value="3">name a-z</option>
    <option <?= (isset($_GET["sort"])) ? ($_GET["sort"] == 4) ? "selected" : "" : "" ?> value="4">name z-a</option>
</select>
</div>

<div class=".col-5">
<button class="btn btn-primary" name="search" type="submit">search</button>
</div>
        </form>