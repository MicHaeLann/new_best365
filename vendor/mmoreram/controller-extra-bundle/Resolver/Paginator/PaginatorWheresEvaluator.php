<?php

/*
 * This file is part of the ControllerExtraBundle for Symfony2.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

namespace Mmoreram\ControllerExtraBundle\Resolver\Paginator;

use Doctrine\ORM\QueryBuilder;

use Mmoreram\ControllerExtraBundle\Annotation\Paginator as AnnotationPaginator;
use Mmoreram\ControllerExtraBundle\Provider\RequestParameterProvider;
use Mmoreram\ControllerExtraBundle\Resolver\Paginator\Interfaces\PaginatorEvaluatorInterface;

/**
 * Class PaginatorWheresEvaluator
 */
class PaginatorWheresEvaluator implements PaginatorEvaluatorInterface
{
    /**
     * @var RequestParameterProvider
     *
     * Request Parameter provider
     */
    protected $requestParameterProvider;

    /**
     * Construct
     *
     * @param RequestParameterProvider $requestParameterProvider Request Parameter provider
     */
    public function __construct(RequestParameterProvider $requestParameterProvider)
    {
        $this->requestParameterProvider = $requestParameterProvider;
    }

    /**
     * Evaluates inner joins
     *
     * @param QueryBuilder        $queryBuilder Query builder
     * @param AnnotationPaginator $annotation   Annotation
     *
     * @return PaginatorEvaluatorInterface self Object
     */
    public function evaluate(
        QueryBuilder $queryBuilder,
        AnnotationPaginator $annotation
    ) {
        $iteration = 0;

        if (is_array($annotation->getWheres())) {
            foreach ($annotation->getWheres() as $where) {
                $annotationWhereParameter = $where[3];
                $whereParameter = $this->clearWildcards($annotationWhereParameter);

                $whereValue = $this
                    ->requestParameterProvider
                    ->getParameterValue($whereParameter);

                $whereValue = $this->addWildcards($annotationWhereParameter, $whereValue);

                $optionalFilter = (boolean) isset($where[4])
                    ? $where[4]
                    : false;

                if ($optionalFilter && ($whereParameter === $whereValue)) {
                    continue;
                }

                $queryBuilder
                    ->andWhere(trim($where[0]) . '.' . trim($where[1]) . " " . $where[2] . " ?0" . $iteration)
                    ->setParameter("0" . $iteration, $whereValue);

                $iteration++;
            }
        }

        return $this;
    }

    /**
     * Remove wildcards from query if necessary
     *
     * @param string $where Where from annotation
     *
     * @return string
     */
    private function clearWildcards($where)
    {
        return trim($where, '%');
    }

    /**
     * Add wildcards to query if necessary
     *
     * @param string $annotationWhereParameter Where from annotation
     * @param string $whereValue               Where replaced with request parameters
     *
     * @return string
     */
    private function addWildcards($annotationWhereParameter, $whereValue)
    {
        $hasInitialPercentage = (strpos($annotationWhereParameter, '%') === 0);
        $hasEndPercentage = (strpos($annotationWhereParameter, '%') === 0);
        if ($hasInitialPercentage) {
            $whereValue = '%' . $whereValue;
        }
        if ($hasEndPercentage) {
            $whereValue = $whereValue . '%';
        }

        return $whereValue;
    }
}
