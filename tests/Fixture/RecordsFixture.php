<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecordsFixture
 *
 */
class RecordsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'from' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'line_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'to' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'stops' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ticket_inspector' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_records_stations1_idx' => ['type' => 'index', 'columns' => ['from'], 'length' => []],
            'fk_records_stations2_idx' => ['type' => 'index', 'columns' => ['to'], 'length' => []],
            'fk_records_lines1_idx' => ['type' => 'index', 'columns' => ['line_id'], 'length' => []],
            'fk_records_users1_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'stops' => ['type' => 'index', 'columns' => ['stops'], 'length' => []],
            'tiicket_inspector' => ['type' => 'index', 'columns' => ['ticket_inspector'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_records_lines1' => ['type' => 'foreign', 'columns' => ['line_id'], 'references' => ['lines', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_records_stations1' => ['type' => 'foreign', 'columns' => ['from'], 'references' => ['stations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_records_stations2' => ['type' => 'foreign', 'columns' => ['to'], 'references' => ['stations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_records_users1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => '28c38bbc-b0ee-48f5-b08d-7a487048c2e5',
            'user_id' => '28b4f2ca-f0ee-4269-8dd9-c2136063c4d7',
            'date' => '2017-11-16 10:08:06',
            'from' => '9d6f64c9-7b85-4c86-a555-1bc9654821e6',
            'line_id' => 'cd230e80-8128-44ab-addd-17b73dda09bc',
            'to' => 'ffa7e803-356b-489d-aa2d-1ee8580a10ef',
            'stops' => 1,
            'ticket_inspector' => 1
        ],
    ];
}
