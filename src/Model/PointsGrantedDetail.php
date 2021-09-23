<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The number of Amazon Points offered with the purchase of an item, and their
 * monetary value.
 */
class PointsGrantedDetail extends AbstractModel
{
    /**
     * The number of Amazon Points granted with the purchase of an item.
     *
     * @var int
     */
    public $PointsNumber = null;

    /**
     * The monetary value of the Amazon Points granted.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $PointsMonetaryValue = null;
}
