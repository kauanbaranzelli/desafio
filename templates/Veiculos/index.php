<?= $this->Html->link(__('Novo Veiculo'), ['action' => 'add']) ?>

<table class="tabela" width="100%" >
    <tr>
        <th>ID</th>
        <th>MODELO</th>
        <th>PLACA</th>
        <th>PROPRIETARIO</th>
        <th>COR</th>
        <th>N° CHASSI</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($veiculos as $veiculo): ?>
        <tr>
            <td><?= $this->Number->format($veiculo->id) ?></td>
            <td><?= h($veiculo->modelo) ?></td>
            <td><?= h($veiculo->placa) ?></td>
            <td><?= $veiculo->has('pessoa') ? $this->Html->link($veiculo->pessoa->nome, 
                ['controller' => 'Pessoas', 'action' => 'view', $veiculo->pessoa->id]): '' ?></td>
            <td><?= h($veiculo->cor) ?></td>
            <td><?= h($veiculo->numerochassi) ?></td>
            <td>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $veiculo->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $veiculo->id], 
                ['confirm' => __('Você quer mesmo deletar o veiculo # {0}?', $veiculo->id)]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="diretorios">
    <?= $this->Html->link(__('Home'), ['controller' => 'Pages', 'action' => 'display', 'home']) ?>
    <?= $this->Html->link(__('Lista de Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?>  
    <?= $this->Html->link(__('Lista de Imovels'), ['controller' => 'Imovels', 'action' => 'index']) ?>
    <?= $this->Html->link(__('Lista de Veiculos'), ['controller' => 'Veiculos', 'action' => 'index']) ?>
</div>