<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A list of orders along with additional information to make subsequent API calls.
 */
class OrdersList extends AbstractModel
{
    /**
     * @var \Amz\Orders\Model\OrderList
     */
    public $Orders = null;

    /**
     * When present and not empty, pass this string token in the next request to return
     * the next response page.
     *
     * @var string
     */
    public $NextToken = null;

    /**
     * A date used for selecting orders that were last updated before (or at) a
     * specified time. An update is defined as any change in order status, including
     * the creation of a new order. Includes updates made by Amazon and by the seller.
     * All dates must be in ISO 8601 format.
     *
     * @var string
     */
    public $LastUpdatedBefore = null;

    /**
     * A date used for selecting orders created before (or at) a specified time. Only
     * orders placed before the specified time are returned. The date must be in ISO
     * 8601 format.
     *
     * @var string
     */
    public $CreatedBefore = null;
}
