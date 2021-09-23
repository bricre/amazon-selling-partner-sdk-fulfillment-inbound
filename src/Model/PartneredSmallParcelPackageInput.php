<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Dimension and weight information for the package.
 */
class PartneredSmallParcelPackageInput extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\Dimensions
     */
    public $Dimensions = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\Weight
     */
    public $Weight = null;
}
