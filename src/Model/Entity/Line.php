<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Line Entity
 *
 * @property string $id
 * @property string $name
 *
 * @property \App\Model\Entity\Record[] $records
 * @property \App\Model\Entity\Station[] $stations
 */
class Line extends Entity
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
        'name' => true,
        'records' => true,
        'stations' => true
    ];
}
