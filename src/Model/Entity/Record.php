<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Record Entity
 *
 * @property string $id
 * @property string $user_id
 * @property \Cake\I18n\FrozenTime $date
 * @property string $from
 * @property string $line_id
 * @property string $to
 * @property int $stops
 * @property bool $ticket_inspector
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Line $line
 */
class Record extends Entity
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
        'user_id' => true,
        'date' => true,
        'from' => true,
        'line_id' => true,
        'to' => true,
        'stops' => true,
        'ticket_inspector' => true,
        'user' => true,
        'line' => true
    ];
}
