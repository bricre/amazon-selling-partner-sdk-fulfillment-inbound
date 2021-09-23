<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getShipmentItems operation.
 */
class GetShipmentItemsResponse extends AbstractModel
{
    /**
     * The payload for the getShipmentItems operation.
     *
     * @var \Amz\FulfillmentInbound\Model\GetShipmentItemsResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
