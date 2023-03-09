<?php

declare(strict_types=1);

namespace Trenzalore\Ofex\Model;

use Magento\Framework\Model\AbstractModel;
use Trenzalore\Ofex\Api\Data\OfexCouponCodeInterface;
use Trenzalore\Ofex\Model\ResourceModel\Ofex as ResourceModelOfex;

class Ofex extends AbstractModel implements OfexCouponCodeInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModelOfex::class);
    }

    public function getOfexId()
    {
        return $this->getData(self::OFEX_ID);
    }

    public function setOfexId($id)
    {
        return $this->setData(self::OFEX_ID, $id);
    }

    public function getOfexName()
    {
        return $this->getData(self::OFEX_NAME);
    }

    public function setOfexName($name)
    {
        return $this->setData(self::OFEX_NAME, $name);
    }

    public function getOfexDescription()
    {
        return $this->getData(self::OFEX_DESCRIPTION);
    }

    public function setOfexDescription($description)
    {
        return $this->setData(self::OFEX_DESCRIPTION, $description);
    }

    public function getOfexDiscountPercent()
    {
        return $this->getData(self::OFEX_DISCOUNT_PERCENT);
    }

    public function setOfexDiscountPercent($discountPercent)
    {
        return $this->setData(self::OFEX_DISCOUNT_PERCENT, $discountPercent);
    }

    public function getOfexCreatedAt()
    {
        return $this->getData(self::OFEX_CREATED_AT);
    }

    public function setOfexCreatedAt($createdAt)
    {
        return $this->setData(self::OFEX_CREATED_AT, $createdAt);
    }

    public function getOfexUpdatedAt()
    {
        return $this->getData(self::OFEX_UPDATED_AT);
    }

    public function setOfexUpdatedAt($updatedAt)
    {
        return $this->setData(self::OFEX_UPDATED_AT, $updatedAt);
    }
}
