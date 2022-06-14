<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Buyer information for custom orders from the Amazon Custom program.
 */
class BuyerCustomizedInfoDetail extends AbstractModel
{
    /**
     * The location of a zip file containing Amazon Custom data.
     *
     * @var string
     */
    public $CustomizedURL = null;
}
