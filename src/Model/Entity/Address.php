<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $district
 * @property string $neighborhood
 * @property string $street
 * @property string $number
 * @property string $complement
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Address extends Entity
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
        'country' => true,
        'state' => true,
        'city' => true,
        'district' => true,
        'neighborhood' => true,
        'street' => true,
        'number' => true,
        'complement' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
