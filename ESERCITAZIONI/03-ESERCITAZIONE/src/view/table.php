<table>

    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Size</th>
            <th>Price</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($items as $item) : ?>
            <tr>
                <td><? $item->Title ?></td>
                <td><? $item->Description ?></td>
                <td><? $item->Size ?></td>
                <td><? $item->Price ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>