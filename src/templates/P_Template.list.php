<?php
/** @var \Stationer\Graphite\View $View */
/** @var \Stationer\Pencil\models\Template[] $Templates */
echo $View->render('header');
?>

    <div class="container">
    <h1>List Templates</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Template</th>
            <th>Last Updated</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($Templates as $Template) : ?>
        <tr>
            <td>
                <strong>
                    <a href="/P_Template/edit/<?php echo $Template->node_id; ?>">
                        <?php echo $Template->label; ?>
                    </a>
                </strong>
            </td>
            <td><?php echo $Template->File->updated_dts; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php echo $View->render('footer');
