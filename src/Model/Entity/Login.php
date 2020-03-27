<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Login Entity
 *
 * @property int $id
 * @property int|null $source_id
 * @property int|null $token_id
 * @property string $ip_source
 * @property string $ip_destination
 * @property \Cake\I18n\FrozenTime $created
 * @property string|null $hash
 *
 * @property \App\Model\Entity\Source $source
 * @property \App\Model\Entity\Token $token
 */
class Login extends Entity
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
        'source_id' => true,
        'token_id' => true,
        'ip_source' => true,
        'ip_destination' => true,
        'created' => true,
        'hash' => true,
        'source' => true,
        'token' => true,
    ];
}
