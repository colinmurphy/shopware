<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductImg;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\StringField;

class DescriptionField extends StringField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('description', 'description', 'product_img', $constraintBuilder);
    }
}