<h1><?php h($article->title) ?></h1>
<p><?php h($article->body) ?></p>
<p><small>Created: <?php $article->created->format(DATE_RFC850) ?></small></p>
<p><?php $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?> </p>