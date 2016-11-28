<?php
declare(strict_types=1);
namespace CodeEmailMKT\Domain\Entity;

//use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Tag
{
    private $id;
    private $name;
    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getTags() : Collection
    {
        return $this->tags;
    }
}
