<h1>
    Bookmarks tagged with
    <?= $this->Text->toList(h($tags)) ?>
</h1>

<section>
<?php foreach ($team as $value): ?>
    <article>
        <h4><?= $this->Html->link($value->name, $value->url) ?></h4>
        <small><?= h($value->url) ?></small>
        <?= $this->Text->autoParagraph(h($value->description)) ?>
    </article>
<?php endforeach; ?>
</section>
