<?php

namespace Barryvdh\Debugbar\DataFormatter;

use DebugBar\DataFormatter\DataFormatter;

/**
 * Simple DataFormatter based on the deprecated Symfony ValueExporter
 *
 * @see https://github.com/symfony/symfony/blob/v3.4.4/src/Symfony/Component/HttpKernel/DataCollector/Util/ValueExporter.php
 */
class SimpleFormatter extends DataFormatter
{
    /**
     * @param $data
     * @return string
     */
    public function formatVar($data)
    {
        return $this->exportValue($data);
    }

    /**
     * Converts a PHP value to a string.
     *
     * @param mixed $value The PHP value
     * @param int   $depth Only for internal usage
     * @param bool  $deep  Only for internal usage
     *
     * @return string The string representation of the given value
     *  @author Bernhard Schussek <bschussek@gmail.com>
     */
    

    /**
     * @param \__PHP_Incomplete_Class $value
     * @return mixed
     * @author Bernhard Schussek <bschussek@gmail.com>
     */
    
}
