<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StationsFixture
 *
 */
class StationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'lat' => ['type' => 'float', 'length' => 10, 'precision' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'lng' => ['type' => 'float', 'length' => 10, 'precision' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'vicinity' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'lat' => ['type' => 'index', 'columns' => ['lat'], 'length' => []],
            'lng' => ['type' => 'index', 'columns' => ['lng'], 'length' => []],
            'vicinty' => ['type' => 'index', 'columns' => ['vicinity'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '9d4761a0-1a5d-41aa-82ba-c7db8278f76e',
            'name' => 'Lorem ipsum dolor sit amet',
            'lat' => 1,
            'lng' => 1,
            'vicinity' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
