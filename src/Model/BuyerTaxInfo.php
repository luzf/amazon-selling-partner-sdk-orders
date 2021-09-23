<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Tax information about the buyer.
 */
class BuyerTaxInfo extends AbstractModel
{
    /**
     * The legal name of the company.
     *
     * @var string
     */
    public $CompanyLegalName = null;

    /**
     * The country or region imposing the tax.
     *
     * @var string
     */
    public $TaxingRegion = null;

    /**
     * A list of tax classifications that apply to the order.
     *
     * @var \Amz\Orders\Model\TaxClassification[]
     */
    public $TaxClassifications = null;
}
