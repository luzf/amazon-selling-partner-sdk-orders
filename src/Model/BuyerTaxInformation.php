<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Contains the business invoice tax information. Available only in the TR
 * marketplace.
 */
class BuyerTaxInformation extends AbstractModel
{
    /**
     * Business buyer's company legal name.
     *
     * @var string
     */
    public $BuyerLegalCompanyName = null;

    /**
     * Business buyer's address.
     *
     * @var string
     */
    public $BuyerBusinessAddress = null;

    /**
     * Business buyer's tax registration ID.
     *
     * @var string
     */
    public $BuyerTaxRegistrationId = null;

    /**
     * Business buyer's tax office.
     *
     * @var string
     */
    public $BuyerTaxOffice = null;
}
