<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The reason for rejecting the order's regulated information. Not present if the
 * order isn't rejected.
 */
class RejectionReason extends AbstractModel
{
    /**
     * The unique identifier for the rejection reason.
     *
     * @var string
     */
    public $RejectionReasonId = null;

    /**
     * The human-readable description of this rejection reason.
     *
     * @var string
     */
    public $RejectionReasonDescription = null;
}
