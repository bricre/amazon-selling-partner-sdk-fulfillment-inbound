<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createInboundShipmentPlan operation.
 */
class CreateInboundShipmentPlanResponse extends AbstractModel
{
    /**
     * The payload for the createInboundShipmentPlan operation.
     *
     * @var \Amz\FulfillmentInbound\Model\CreateInboundShipmentPlanResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
