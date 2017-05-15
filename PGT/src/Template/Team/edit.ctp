<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $team->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Team'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="team form col-md-10 columns content">
    <?= $this->Form->create($team) ?>
    <fieldset>
        <legend><?= 'Edit Team' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('in_name');
            echo $this->Form->input('country');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
