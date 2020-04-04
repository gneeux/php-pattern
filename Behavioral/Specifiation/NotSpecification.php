<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:02
 */

namespace DesignPatterns\Behavioral\Specifiation;


class NotSpecification implements SpecificationInterface
{
    private $specification;

    public function __construct(SpecificationInterface $specification)
    {
        $this->specification = $specification;
    }

    public function isStaisfiedBy(Item $item)
    {
        // TODO: Implement isStaisfiedBy() method.
        return !$this->specification->isStaisfiedBy($item);
    }


}