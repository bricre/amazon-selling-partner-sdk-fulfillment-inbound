<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the voidTransport operation.
 */
class VoidTransportResponse extends AbstractModel
{
    /**
     * The payload for the voidTransport operation.
     *
     * @var \Amz\FulfillmentInbound\Model\CommonTransportResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
