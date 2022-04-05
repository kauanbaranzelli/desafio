<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VeiculosFixture
 */
class VeiculosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'modelo' => 'Lorem ipsum dolor sit amet',
                'placa' => 'Lorem ipsum dolor ',
                'pessoa_id' => 'Lorem ipsum dolor sit amet',
                'cor' => 'Lorem ipsum dolor ',
                'numerochassi' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
