<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Team']), ['action' => 'edit', $team->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Team']), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Team']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Team']), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="team view col-lg-10 col-md-9">
    <h3><?= h($team->name) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <td><?= h($team->name) ?></td>
        </tr>
        <tr>
            <th>In Name</th>
            <td><?= h($team->in_name) ?></td>
        </tr>
        <tr>
            <th>Country</th>
            <td><?= h($team->country) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
    </table>
</div>
