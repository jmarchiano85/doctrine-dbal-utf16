<?php

namespace Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\ParameterType;

/**
 * Type that maps an SQL NVARCHAR to a PHP string.
 */
class StringNatlType extends StringType
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return Types::STRING_NATL;
    }

    /**
     * {@inheritDoc}
     */
    public function getBindingType()
    {
	return ParameterType::STRING_NATL;
    }
}

