<?= $this->Html->link(__('Novo Imovel'), ['action' => 'add']) ?>

<table class="tabela" width="100%" >
    <tr>
        <th>ID</th>
        <th>ENDEREÇO</th>
        <th>NUMERO</th>
        <th>PROPRIETARIO</th>
        <th>HABITAÇÃO</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($imovels as $imovel): ?>
        <tr>
            <td><?= $this->Number->format($imovel->id) ?></td>
            <td><?= h($imovel->endereço) ?></td>
            <td><?= h($imovel->numero) ?></td>
            <td><?= $imovel->has('pessoa') ? $this->Html->link($imovel->pessoa->nome, 
                ['controller' => 'Pessoas', 'action' => 'view', $imovel->pessoa->id]): '' ?></td>
            <td><?= $imovel->habitação ? __('Habitada') : __('Inabitada'); ?></td>
            <td>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imovel->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imovel->id], 
                ['confirm' => __('Você quer mesmo deletar o imovel # {0}?', $imovel->id)]) ?>
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

