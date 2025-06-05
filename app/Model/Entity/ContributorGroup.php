<?php

namespace App\Model\Entity;

/**
 * @property int id
 * @property string name
 */
class ContributorGroup extends EntityAbstract
{
    protected $table = 'contributor_group';

    protected $fillable = [
        'id',
        'name',
    ];

    public function contributors()
    {
        return $this->belongsToMany(Contributor::class, 'contributor_group_contributor', 'contributor_group_id', 'contributor_id');
    }
}
