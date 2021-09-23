<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The tax classification for the order.
 */
class TaxClassification extends AbstractModel
{
    /**
     * The type of tax.
     *
     * @var string
     */
    public $Name = null;

    /**
     * The buyer's tax identifier.
     *
     * @var string
     */
    public $Value = null;
}
