<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetInboundGuidanceResult extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\SKUInboundGuidanceList
     */
    public $SKUInboundGuidanceList = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\InvalidSKUList
     */
    public $InvalidSKUList = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ASINInboundGuidanceList
     */
    public $ASINInboundGuidanceList = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\InvalidASINList
     */
    public $InvalidASINList = null;
}
