<?php

declare(strict_types=1);

namespace Trenzalore\Ofex\Model\ResourceModel\Ofex;

use Trenzalore\Ofex\Model\Ofex;
use Trenzalore\Ofex\Model\ResourceModel\Ofex as ResourceModelOfex;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            Ofex::class,
            ResourceModelOfex::class
        );
    }
}
