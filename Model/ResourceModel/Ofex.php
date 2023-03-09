<?php

declare(strict_types=1);

namespace Trenzalore\Ofex\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Ofex extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('ofex_coupon_code', 'ofex_id');
    }
}
