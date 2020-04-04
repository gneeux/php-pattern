<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 19:53
 */

namespace DesignPatterns\Behavioral\Specifiation;


class OrSpecification implements SpecificationInterface
{
    private $specifications;

    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isStaisfiedBy(Item $item)
    {
        // TODO: Implement isStaisfiedBy() method.
        foreach ($this->specifications as $specification) {
            if ($specification->isStaisfiedBy($item)) {
                return true;
            }
        }
        return false;
    }


}