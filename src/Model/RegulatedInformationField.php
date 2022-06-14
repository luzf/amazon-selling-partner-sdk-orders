<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A field collected from the regulatory form.
 */
class RegulatedInformationField extends AbstractModel
{
    /**
     * The unique identifier for the field.
     *
     * @var string
     */
    public $FieldId = null;

    /**
     * The human-readable name for the field.
     *
     * @var string
     */
    public $FieldLabel = null;

    /**
     * The type of field the field.
     *
     * @var string
     */
    public $FieldType = null;

    /**
     * The content of the field as collected in regulatory form. Note that
     * FileAttachment type fields will contain an URL to download the attachment here.
     *
     * @var string
     */
    public $FieldValue = null;
}
