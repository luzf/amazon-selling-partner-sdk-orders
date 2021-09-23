<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The shipping address for the order.
 */
class Address extends AbstractModel
{
    /**
     * The name.
     *
     * @var string
     */
    public $Name = null;

    /**
     * The street address.
     *
     * @var string
     */
    public $AddressLine1 = null;

    /**
     * Additional street address information, if required.
     *
     * @var string
     */
    public $AddressLine2 = null;

    /**
     * Additional street address information, if required.
     *
     * @var string
     */
    public $AddressLine3 = null;

    /**
     * The city.
     *
     * @var string
     */
    public $City = null;

    /**
     * The county.
     *
     * @var string
     */
    public $County = null;

    /**
     * The district.
     *
     * @var string
     */
    public $District = null;

    /**
     * The state or region.
     *
     * @var string
     */
    public $StateOrRegion = null;

    /**
     * The municipality.
     *
     * @var string
     */
    public $Municipality = null;

    /**
     * The postal code.
     *
     * @var string
     */
    public $PostalCode = null;

    /**
     * The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
     *
     * @var string
     */
    public $CountryCode = null;

    /**
     * The phone number. Not returned for Fulfillment by Amazon (FBA) orders.
     *
     * @var string
     */
    public $Phone = null;

    /**
     * The address type of the shipping address.
     *
     * @var string
     */
    public $AddressType = null;
}
