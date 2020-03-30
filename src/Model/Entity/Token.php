<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Token Entity
 *
 * @property int $id
 * @property int $source_id
 * @property string $access_token
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $last_active
 * @property \Cake\I18n\FrozenTime $created
 * @property int|null $github_user_id
 * @property string|null $hash
 *
 * @property \App\Model\Entity\Source $source
 * @property \App\Model\Entity\GithubUser $github_user
 * @property \App\Model\Entity\Login[] $logins
 */
class Token extends Entity
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
        'access_token' => true,
        'status' => true,
        'last_active' => true,
        'created' => true,
        'github_user_id' => true,
        'hash' => true,
        'source' => true,
        'github_user' => true,
        'logins' => true,
    ];
}
