<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getOrderBuyerInfo operation.
 */
class GetOrderBuyerInfoResponse extends AbstractModel
{
    /**
     * The payload for the getOrderBuyerInfo operations.
     *
     * @var \Amz\Orders\Model\OrderBuyerInfo
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getOrderBuyerInfo operation.
     *
     * @var \Amz\Orders\Model\ErrorList
     */
    public $errors = null;
}
