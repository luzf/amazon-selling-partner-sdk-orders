<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The response schema for the getOrderItems operation.
 */
class GetOrderItemsResponse extends AbstractModel
{
    /**
     * The payload for the getOrderItems operation.
     *
     * @var \Amz\Orders\Model\OrderItemsList
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getOrderItems operation.
     *
     * @var \Amz\Orders\Model\ErrorList
     */
    public $errors = null;
}
