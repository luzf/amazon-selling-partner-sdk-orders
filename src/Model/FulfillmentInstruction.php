<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Contains the instructions about the fulfillment like where should it be
 * fulfilled from.
 */
class FulfillmentInstruction extends AbstractModel
{
    /**
     * Denotes the recommended sourceId where the order should be fulfilled from.
     *
     * @var string
     */
    public $FulfillmentSupplySourceId = null;
}
