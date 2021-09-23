<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getInboundGuidance operation.
 */
class GetInboundGuidanceResponse extends AbstractModel
{
    /**
     * The payload for the getInboundGuidance operation.
     *
     * @var \Amz\FulfillmentInbound\Model\GetInboundGuidanceResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
