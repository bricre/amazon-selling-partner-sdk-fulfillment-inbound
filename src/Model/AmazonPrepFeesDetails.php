<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The fees for Amazon to prep goods for shipment.
 */
class AmazonPrepFeesDetails extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\PrepInstruction
     */
    public $PrepInstruction = null;

    /**
     * The fee for Amazon to prepare 1 unit.
     *
     * @var \Amz\FulfillmentInbound\Model\Amount
     */
    public $FeePerUnit = null;
}
