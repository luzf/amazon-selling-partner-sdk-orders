<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The response schema for the getOrderRegulatedInfo operation.
 */
class GetOrderRegulatedInfoResponse extends AbstractModel
{
    /**
     * The payload for the getOrderBuyerInfo operations.
     *
     * @var \Amz\Orders\Model\OrderRegulatedInfo
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getOrderRegulatedInfo
     * operation.
     *
     * @var \Amz\Orders\Model\ErrorList
     */
    public $errors = null;
}
