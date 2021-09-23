<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getOrders operation.
 */
class GetOrdersResponse extends AbstractModel
{
    /**
     * The payload for the getOrders operation.
     *
     * @var \Amz\Orders\Model\OrdersList
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getOrders operation.
     *
     * @var \Amz\Orders\Model\ErrorList
     */
    public $errors = null;
}
