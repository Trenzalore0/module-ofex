<?php

declare(strict_types=1);

namespace Trenzalore\Ofex\Api\Data;

interface OfexCouponCodeInterface
{
    const OFEX_ID = 'ofex_id';

    const OFEX_NAME = 'ofex_name';

    const OFEX_DESCRIPTION = 'ofex_description';

    const OFEX_DISCOUNT_PERCENT = 'ofex_discount_percent';

    const OFEX_CREATED_AT = 'created_at';

    const OFEX_UPDATED_AT = 'updated_at';

    public function getOfexId();

    public function setOfexId($id);

    public function getOfexName();

    public function setOfexName($name);

    public function getOfexDescription();

    public function setOfexDescription($description);

    public function getOfexDiscountPercent();

    public function setOfexDiscountPercent($discountPercent);

    public function getOfexCreatedAt();

    public function setOfexCreatedAt($createdAt);

    public function getOfexUpdatedAt();

    public function setOfexUpdatedAt($updatedAt);
}
