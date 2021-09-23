<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CreateInboundShipmentPlanResult extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\InboundShipmentPlanList
     */
    public $InboundShipmentPlans = null;
}
