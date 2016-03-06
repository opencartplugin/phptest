<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Outbox Entity.
 *
 * @property int $id
 * @property int $message_id
 * @property \App\Model\Entity\Message $message
 * @property int $contact_id
 * @property \App\Model\Entity\Contact $contact
 * @property \Cake\I18n\Time $movetime
 * @property \Cake\I18n\Time $sendtime
 * @property string $stat
 * @property int $mtype_id
 * @property \App\Model\Entity\Mtype $mtype
 * @property string $filename
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Outbox extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
