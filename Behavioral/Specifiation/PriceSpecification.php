<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 19:56
 */

namespace DesignPatterns\Behavioral\Specifiation;


class PriceSpecification implements SpecificationInterface
{
    private $maxPrice;

    private $minPrice;

    public function __construct($minPrice, $maxPrice)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    public function isStaisfiedBy(Item $item)
    {
        // TODO: Implement isStaisfiedBy() method.
        if ($this->maxPrice !== null && $item->getPrice() > $this->maxPrice) {
            return false;
        }

        if ($this->minPrice !== null && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;

    }


}