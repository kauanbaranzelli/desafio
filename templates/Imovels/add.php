<?= $this->Form->create($imovel) ?>
    <fieldset>
        <legend><?= __('Adicionar Imovel') ?></legend>
        <?php
            echo $this->Form->control('endereço');
            echo $this->Form->control('numero');
            echo $this->Form->control('pessoa_id', ['options' => $pessoas]);
            echo $this->Form->control('habitação');
        ?>
    </fieldset>
<?= $this->Form->button(__('Adicionar')) ?>
<?= $this->Form->end() ?>

<div class="diretorios">
    <?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'display', 'home']) ?>
    <?= $this->Html->link(__('Lista de Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?>  
    <?= $this->Html->link(__('Lista de Imovels'), ['controller' => 'Imovels', 'action' => 'index']) ?>
    <?= $this->Html->link(__('Lista de Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?>
</div>