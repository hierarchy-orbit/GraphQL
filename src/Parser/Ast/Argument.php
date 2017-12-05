<?php

namespace Youshido\GraphQL\Parser\Ast;

use Youshido\GraphQL\Parser\Ast\Interfaces\ValueInterface;
use Youshido\GraphQL\Parser\Location;

/**
 * Class Argument
 */
class Argument extends AbstractAst
{
    /** @var string */
    private $name;

    /** @var ValueInterface */
    private $value;

    /**
     * @param string         $name
     * @param ValueInterface $value
     * @param Location       $location
     */
    public function __construct($name, ValueInterface $value, Location $location)
    {
        parent::__construct($location);
        $this->name  = $name;
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return ValueInterface
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
