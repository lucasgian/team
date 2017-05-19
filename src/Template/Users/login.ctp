<?php echo $this->Form->create(); ?>
<p>
    <?php echo $this->Form->input('email'); ?>
</p>
<p>
    <?php echo $this->Form->input('password'); ?>
</p>
<p>
    <?php echo $this->Form->button('Login'); ?>
</p>
<p>
    <?php echo $this->Form->end(); ?>
</p>


<!-- $this->Form->create('User', array('id' => 'login'));-->