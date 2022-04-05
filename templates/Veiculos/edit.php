<?= $this->Form->create($veiculo) ?>
    <fieldset>
        <legend><?= __('Editar Veiculo') ?></legend>
        <?php
            echo $this->Form->control('modelo');
            echo $this->Form->control('placa');
            echo $this->Form->control('pessoa_id', ['options' => $pessoas]);
            echo $this->Form->control('cor');
            echo $this->Form->control('numerochassi');
        ?>
    </fieldset>
<?= $this->Form->button(__('Editar')) ?> 
<?= $this->Form->end() ?>

<div class="diretorios">
    <?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'display', 'home']) ?>
    <?= $this->Html->link(__('Lista de Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?>  
    <?= $this->Html->link(__('Lista de Imovels'), ['controller' => 'Imovels', 'action' => 'index']) ?>
    <?= $this->Html->link(__('Lista de Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?>
</div>