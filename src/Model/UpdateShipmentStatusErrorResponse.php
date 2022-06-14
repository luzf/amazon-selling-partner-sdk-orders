<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The error response schema for the UpdateShipmentStatus operation.
 */
class UpdateShipmentStatusErrorResponse extends AbstractModel
{
    /**
     * One or more unexpected errors occurred during the UpdateShipmentStatus
     * operation.
     *
     * @var \Amz\Orders\Model\ErrorList
     */
    public $errors = null;
}
