<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about a sub-payment method used to pay for a COD order.
 */
class PaymentExecutionDetailItem extends AbstractModel
{
    /**
     * @var \Amz\Orders\Model\Money
     */
    public $Payment = null;

    /**
     * A sub-payment method for a COD order.
     *
     * Possible values:
     *
     * * COD - Cash On Delivery.
     *
     * * GC - Gift Card.
     *
     * * PointsAccount - Amazon Points.
     *
     * @var string
     */
    public $PaymentMethod = null;
}
