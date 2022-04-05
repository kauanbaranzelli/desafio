<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImovelsFixture
 */
class ImovelsFixture extends TestFixture
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
                'endereço' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lorem ipsum dolor ',
                'pessoa_id' => 'Lorem ipsum dolor sit amet',
                'habitação' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
