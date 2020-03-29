<?php
/**
 * 建造者模式
 *
 * 建造者是创建一个复杂对象的一部分接口
 * 有时间，如果建造者对他所创建的东西拥有良好的知识储备，这个接口就可能成为一个有默认方法的抽象类（又称适配器）
 * 如果对象有复杂的继承树，那么对于建造者来说，有一个复杂几成熟也是符合逻辑的
 *
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 7:43 PM
 */

namespace DesignPatterns\Creationl\Builder;

class Director
{
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}

