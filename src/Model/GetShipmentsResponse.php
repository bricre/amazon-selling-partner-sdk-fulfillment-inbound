<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getShipments operation.
 */
class GetShipmentsResponse extends AbstractModel
{
    /**
     * The payload for the getShipments operation.
     *
     * @var \Amz\FulfillmentInbound\Model\GetShipmentsResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
