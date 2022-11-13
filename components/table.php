<table class="table border">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>category</th>
                    <th>price</th>
                    <th>about</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ikeas as $ikea) {  ?>
                <tr>
                        <td> <?=$ikea->id?> </td>
                        <td> <?=$ikea->name?> </td>
                        <td> <?=$ikea->category?> </td>
                        <td> <?=$ikea->price?> </td>
                        <td> <?=$ikea->about?> </td>
                        
                        <td>
                            <form action="" method="post">
                            <input type="hidden" name="id" value="<?=$ikea->id?>">
                                <button type="submit" name="edit" class="btn btn-success">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?=$ikea->id?>">
                            <button type="submit" name="destroy" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                </tr>
                <?php }  ?>
            </tbody>
        </table>