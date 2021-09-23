<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The dimension values and unit of measurement.
 */
class Dimensions extends AbstractModel
{
    /**
     * The length dimension.
     *
     * @var \Amz\FulfillmentInbound\Model\BigDecimalType
     */
    public $Length = null;

    /**
     * The width dimension.
     *
     * @var \Amz\FulfillmentInbound\Model\BigDecimalType
     */
    public $Width = null;

    /**
     * The height dimension.
     *
     * @var \Amz\FulfillmentInbound\Model\BigDecimalType
     */
    public $Height = null;

    /**
     * The unit of measurement for the dimensions.
     *
     * @var \Amz\FulfillmentInbound\Model\UnitOfMeasurement
     */
    public $Unit = null;
}
