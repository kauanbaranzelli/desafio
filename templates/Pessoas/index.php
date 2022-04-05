<?= $this->Html->link(__('Novo Cadastro'), ['action' => 'add']) ?>

<table class="tabela" width="100%" >
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>IDADE</th>
        <th>E-MAIL</th>
        <th>CPF</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($pessoas as $pessoa): ?>
        <tr>
            <td><?= $this->Number->format($pessoa->id) ?></td>
            <td><?= h($pessoa->nome) ?></td>
            <td><?= h($pessoa->telefone) ?></td>
            <td><?= h($pessoa->idade) ?></td>
            <td><?= h($pessoa->email) ?></td>
            <td><?= h($pessoa->cpf) ?></td>
            <td>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Você quer mesmo deletar o usuario # {0}?', $pessoa->id)]) ?>
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