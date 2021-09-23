<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getOrderAddress operation.
 */
class GetOrderAddressResponse extends AbstractModel
{
    /**
     * The payload for the getOrderAddress operations.
     *
     * @var \Amz\Orders\Model\OrderAddress
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getOrderAddress operation.
     *
     * @var \Amz\Orders\Model\ErrorList
     */
    public $errors = null;
}
