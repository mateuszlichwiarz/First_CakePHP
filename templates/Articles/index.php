<h1> Articles </h1>
<?php $this->Html->link('add Article', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>
    <!-- iterate $articles query object, printing out article info-->
    <?php foreach($articles as $article): ?>
    <tr>
        <td>
            <?php $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?php $article->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
