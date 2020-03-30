<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GithubUser Entity
 *
 * @property int $id
 * @property string $login
 * @property string|null $name
 * @property string|null $avatar
 * @property int|null $type
 * @property bool|null $site_admin
 * @property string|null $company
 * @property string|null $blog
 * @property string|null $location
 * @property \Cake\I18n\FrozenTime|null $since
 * @property bool|null $active
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $node
 * @property string|null $gitid
 */
class GithubUser extends Entity
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
        'login' => true,
        'name' => true,
        'avatar' => true,
        'type' => true,
        'site_admin' => true,
        'company' => true,
        'blog' => true,
        'location' => true,
        'since' => true,
        'active' => true,
        'created' => true,
        'node' => true,
        'gitid' => true,
    ];
}
