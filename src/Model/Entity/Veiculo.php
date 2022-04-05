<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity
 *
 * @property int $id
 * @property string $modelo
 * @property string $placa
 * @property string $pessoa_id
 * @property string $cor
 * @property string $numerochassi
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class Veiculo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'modelo' => true,
        'placa' => true,
        'pessoa_id' => true,
        'cor' => true,
        'numerochassi' => true,
        'pessoa' => true,
    ];
}
