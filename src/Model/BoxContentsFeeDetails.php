<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The manual processing fee per unit and total fee for a shipment.
 */
class BoxContentsFeeDetails extends AbstractModel
{
    /**
     * The number of units to ship.
     *
     * @var \Amz\FulfillmentInbound\Model\Quantity
     */
    public $TotalUnits = null;

    /**
     * The manual processing fee per unit.
     *
     * @var \Amz\FulfillmentInbound\Model\Amount
     */
    public $FeePerUnit = null;

    /**
     * The total manual processing fee for the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Amount
     */
    public $TotalFee = null;
}
