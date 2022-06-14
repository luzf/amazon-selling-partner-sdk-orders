<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * the list of order items and quantities when the seller wants to partially update
 * the shipment status of the order.
 */
class OrderItems extends AbstractModel
{
    protected $isRawObject = true;
}
