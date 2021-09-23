<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The monetary value of the order.
 */
class Money extends AbstractModel
{
    /**
     * The three-digit currency code. In ISO 4217 format.
     *
     * @var string
     */
    public $CurrencyCode = null;

    /**
     * The currency amount.
     *
     * @var string
     */
    public $Amount = null;
}
