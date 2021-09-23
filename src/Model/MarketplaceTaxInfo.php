<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Tax information about the marketplace.
 */
class MarketplaceTaxInfo extends AbstractModel
{
    /**
     * A list of tax classifications that apply to the order.
     *
     * @var \Amz\Orders\Model\TaxClassification[]
     */
    public $TaxClassifications = null;
}
