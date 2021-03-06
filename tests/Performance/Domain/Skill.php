<?php

/*
 * This file is part of the GraphAware Neo4j PHP OGM package.
 *
 * (c) GraphAware Ltd <info@graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GraphAware\Neo4j\OGM\Tests\Performance\Domain;

use GraphAware\Neo4j\OGM\Annotations as OGM;

/**
 * @OGM\Node(label="Skill")
 */
class Skill
{
    /**
     * @OGM\GraphId
     */
    protected $id;

    /**
     * @OGM\Property(type="string")
     */
    protected $name;

    /**
     * @OGM\Property(type="float")
     */
    protected $averageLevel;

    /**
     * @OGM\Relationship(targetEntity="\GraphAware\Neo4j\OGM\Tests\Performance\Domain\Person",
     *     type="HAS_SKILL", direction="INCOMING", collection=true)
     */
    protected $personsWithSkill;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAverageLevel()
    {
        return $this->averageLevel;
    }

    /**
     * @return mixed
     */
    public function getPersonsWithSkill()
    {
        return $this->personsWithSkill;
    }
}
