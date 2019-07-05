<?php

namespace AndreasGlaser\DoctrineRql\Extension\Graviton\RqlParser\Node\Query;

use Graviton\RqlParser\Node\Query\AbstractComparisonOperatorNode;
use Graviton\RqlParser\RqlEncoder;

/**
 * Class AbstractNullOperatorNode
 *
 * @package AndreasGlaser\DoctrineRql\Extension\Graviton\RqlParser\Node\Query
 */
abstract class AbstractNullOperatorNode extends AbstractComparisonOperatorNode
{
    /**
     * AbstractNullOperatorNode constructor.
     *
     * @param $field
     */
    public function __construct($field)
    {
        $this->setField($field);
    }

    /**
     * @return string
     */
    public function toRql()
    {
        return sprintf(
            '%s(%s)',
            $this->getNodeName(),
            RqlEncoder::encodeFieldName($this->getField())
        );
    }
}
