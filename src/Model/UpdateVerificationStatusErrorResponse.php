<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The error response schema for the UpdateVerificationStatus operation.
 */
class UpdateVerificationStatusErrorResponse extends AbstractModel
{
    /**
     * One or more unexpected errors occurred during the UpdateVerificationStatus
     * operation.
     *
     * @var \Amz\Orders\Model\ErrorList
     */
    public $errors = null;
}
