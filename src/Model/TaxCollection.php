<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about withheld taxes.
 */
class TaxCollection extends AbstractModel
{
    /**
     * The tax collection model applied to the item.
     *
     * @var string
     */
    public $Model = null;

    /**
     * The party responsible for withholding the taxes and remitting them to the taxing
     * authority.
     *
     * @var string
     */
    public $ResponsibleParty = null;
}
