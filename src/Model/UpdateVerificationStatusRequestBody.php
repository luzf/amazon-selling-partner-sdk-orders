<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The updated values of the VerificationStatus field.
 */
class UpdateVerificationStatusRequestBody extends AbstractModel
{
    /**
     * The new verification status of the order.
     *
     * @var \Amz\Orders\Model\VerificationStatus
     */
    public $status = null;

    /**
     * The identifier for the order's regulated information reviewer.
     *
     * @var string
     */
    public $externalReviewerId = null;

    /**
     * The unique identifier for the rejection reason used for rejecting the order's
     * regulated information. Only required if the new status is rejected.
     *
     * @var string
     */
    public $rejectionReasonId = null;
}
