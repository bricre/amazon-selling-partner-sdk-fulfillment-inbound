<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of invalid ASIN values and the reasons they are invalid.
 */
class InvalidASINList extends AbstractModel
{
    protected $isRawObject = true;
}
