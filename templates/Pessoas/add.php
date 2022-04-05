
<?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Cadastrar Novo Usuario') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('telefone');
            echo $this->Form->control('idade');
            echo $this->Form->control('email');
            echo $this->Form->control('cpf');
        ?>
    </fieldset>
<?= $this->Form->button(__('Cadastrar')) ?>
<?= $this->Form->end() ?>

<div class="diretorios">
    <?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'display', 'home']) ?>
    <?= $this->Html->link(__('Lista de Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?>  
    <?= $this->Html->link(__('Lista de Imovels'), ['controller' => 'Imovels', 'action' => 'index']) ?>
    <?= $this->Html->link(__('Lista de Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?>
</div>