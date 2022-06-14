<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Request to update the verification status of an order containing regulated
 * products.
 */
class UpdateVerificationStatusRequest extends AbstractModel
{
    /**
     * The updated values of the VerificationStatus field.
     *
     * @var \Amz\Orders\Model\UpdateVerificationStatusRequestBody
     */
    public $regulatedOrderVerificationStatus = null;
}
