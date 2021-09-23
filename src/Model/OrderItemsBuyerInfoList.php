<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A single order item's buyer information list with the order ID.
 */
class OrderItemsBuyerInfoList extends AbstractModel
{
    /**
     * @var \Amz\Orders\Model\OrderItemBuyerInfoList
     */
    public $OrderItems = null;

    /**
     * When present and not empty, pass this string token in the next request to return
     * the next response page.
     *
     * @var string
     */
    public $NextToken = null;

    /**
     * An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @var string
     */
    public $AmazonOrderId = null;
}
