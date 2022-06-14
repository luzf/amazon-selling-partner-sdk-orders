<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The verification status of the order along with associated approval or rejection
 * metadata.
 */
class RegulatedOrderVerificationStatus extends AbstractModel
{
    /**
     * The verification status of the order.
     *
     * @var \Amz\Orders\Model\VerificationStatus
     */
    public $Status = null;

    /**
     * Whether the regulated information provided in the order requires a review by the
     * merchant.
     *
     * @var bool
     */
    public $RequiresMerchantAction = null;

    /**
     * A list of valid rejection reasons that may be used to reject the order's
     * regulated information.
     *
     * @var \Amz\Orders\Model\RejectionReason[]
     */
    public $ValidRejectionReasons = null;

    /**
     * The reason for rejecting the order's regulated information. Not present if the
     * order isn't rejected.
     *
     * @var \Amz\Orders\Model\RejectionReason
     */
    public $RejectionReason = null;

    /**
     * The date the order was reviewed. In ISO 8601 date time format.
     *
     * @var string
     */
    public $ReviewDate = null;

    /**
     * The identifier for the order's regulated information reviewer.
     *
     * @var string
     */
    public $ExternalReviewerId = null;
}
