<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $telefone
 * @property int $idade
 * @property string $email
 * @property string $cpf
 *
 * @property \App\Model\Entity\Imovel[] $imovels
 * @property \App\Model\Entity\Veiculo[] $veiculos
 */
class Pessoa extends Entity
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
        'nome' => true,
        'telefone' => true,
        'idade' => true,
        'email' => true,
        'cpf' => true,
        'imovels' => true,
        'veiculos' => true,
    ];
}
