<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Product information on the number of items.
 */
class ProductInfoDetail extends AbstractModel
{
    /**
     * The total number of items that are included in the ASIN.
     *
     * @var int
     */
    public $NumberOfItems = null;
}
