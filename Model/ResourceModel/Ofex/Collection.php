<?php

declare(strict_types=1);

namespace Trenzalore\Ofex\Model\ResourceModel\Ofex;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'ofex_id';
    protected $_eventPrefix = 'trenzalore_ofex_ofex_collection';
    protected $_eventObject = 'ofex_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Trenzalore\Ofex\Model\Ofex', 'Trenzalore\Ofex\Model\ResourceModel\Ofex');
    }
}
