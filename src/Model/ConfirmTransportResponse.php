<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the confirmTransport operation.
 */
class ConfirmTransportResponse extends AbstractModel
{
    /**
     * The payload for the confirmTransport operation.
     *
     * @var \Amz\FulfillmentInbound\Model\CommonTransportResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
