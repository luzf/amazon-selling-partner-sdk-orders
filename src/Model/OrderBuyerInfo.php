<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Buyer information for an order.
 */
class OrderBuyerInfo extends AbstractModel
{
    /**
     * An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * The anonymized email address of the buyer.
     *
     * @var string
     */
    public $BuyerEmail = null;

    /**
     * The name of the buyer.
     *
     * @var string
     */
    public $BuyerName = null;

    /**
     * The county of the buyer.
     *
     * @var string
     */
    public $BuyerCounty = null;

    /**
     * Tax information about the buyer.
     *
     * @var \Amz\Orders\Model\BuyerTaxInfo
     */
    public $BuyerTaxInfo = null;

    /**
     * The purchase order (PO) number entered by the buyer at checkout. Returned only
     * for orders where the buyer entered a PO number at checkout.
     *
     * @var string
     */
    public $PurchaseOrderNumber = null;
}
