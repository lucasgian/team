<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Team'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="team form col-md-10 columns content">
    <?= $this->Form->create($team) ?>
    <fieldset>
        <legend><?= 'Add Team' ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('in_name');
            echo $this->Form->input('country');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
