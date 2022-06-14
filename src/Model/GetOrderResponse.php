<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The response schema for the getOrder operation.
 */
class GetOrderResponse extends AbstractModel
{
    /**
     * The payload for the getOrder operation.
     *
     * @var \Amz\Orders\Model\Order
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getOrder operation.
     *
     * @var \Amz\Orders\Model\ErrorList
     */
    public $errors = null;
}
