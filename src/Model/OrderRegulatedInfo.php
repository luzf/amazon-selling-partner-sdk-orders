<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The order's regulated information along with its verification status.
 */
class OrderRegulatedInfo extends AbstractModel
{
    /**
     * An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * The regulated information collected during purchase and used to verify the
     * order.
     *
     * @var \Amz\Orders\Model\RegulatedInformation
     */
    public $RegulatedInformation = null;

    /**
     * Whether the order requires attaching a dosage information label when shipped.
     *
     * @var bool
     */
    public $RequiresDosageLabel = null;

    /**
     * The order's verification status.
     *
     * @var \Amz\Orders\Model\RegulatedOrderVerificationStatus
     */
    public $RegulatedOrderVerificationStatus = null;
}
