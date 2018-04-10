<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Phone Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $area_code
 * @property string $country_code
 * @property string $phone_number
 * @property int $mobile
 * @property int $residential
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Phone extends Entity
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
        'area_code' => true,
        'country_code' => true,
        'phone_number' => true,
        'mobile' => true,
        'residential' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
