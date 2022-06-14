<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The regulated information collected during purchase and used to verify the
 * order.
 */
class RegulatedInformation extends AbstractModel
{
    /**
     * A list of regulated information fields as collected from the regulatory form.
     *
     * @var \Amz\Orders\Model\RegulatedInformationField[]
     */
    public $Fields = null;
}
