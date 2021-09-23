<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of packages, including carrier, tracking number, and status information
 * for each package.
 */
class NonPartneredSmallParcelPackageOutputList extends AbstractModel
{
    protected $isRawObject = true;
}
