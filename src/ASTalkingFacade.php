<?php

namespace Ngeno7\ASTalking;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ngeno7\ASTalking\Skeleton\SkeletonClass
 */
class ASTalkingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'astalking';
    }
}
