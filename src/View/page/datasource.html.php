<h1>Datasources</h1>

<div class="mb-3 mt-3">
    <button class="btn btn-success">
        Create Datasource
    </button>
</div>
<hr>
<div class="mt-3">
    <table id="page-table" class="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datasources as $datasource) : ?>
                <tr>
                    <td><?php echo $datasource['name']; ?></td>
                    <td><?php echo $datasource['type']; ?></td>
                    <td>
                        <a href="page/datasource/edit/<?php echo $datasource['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="page/datasource/remove/<?php echo $datasource['id']; ?>" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>