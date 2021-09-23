<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for this operation.
 */
class InboundShipmentResponse extends AbstractModel
{
    /**
     * The payload for this operation.
     *
     * @var \Amz\FulfillmentInbound\Model\InboundShipmentResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
