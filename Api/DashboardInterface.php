<?php

declare(strict_types=1);

namespace Trenzalore\Ofex\Api;

interface DashboardInterface
{
    /** 
     *  A method that returns the active offers component for a customer. 
     */
    public function getActiveOffersComponentIsEnable($customerId, $storeId);

    /**
     *  A method that returns the list offers component for a customer. 
     */
    public function getListOffersComponent($customerId, $storeId);


}
