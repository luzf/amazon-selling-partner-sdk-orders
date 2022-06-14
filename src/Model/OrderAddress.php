<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The shipping address for the order.
 */
class OrderAddress extends AbstractModel
{
    /**
     * An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * @var \Amz\Orders\Model\Address
     */
    public $ShippingAddress = null;
}
