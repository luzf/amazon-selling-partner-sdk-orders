<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getOrderItemsBuyerInfo operation.
 */
class GetOrderItemsBuyerInfoResponse extends AbstractModel
{
    /**
     * The payload for the getOrderItemsBuyerInfo operation.
     *
     * @var \Amz\Orders\Model\OrderItemsBuyerInfoList
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getOrderItemsBuyerInfo
     * operation.
     *
     * @var \Amz\Orders\Model\ErrorList
     */
    public $errors = null;
}
