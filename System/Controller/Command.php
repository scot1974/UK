<?php
namespace System\Controller;

use System\Request\RequestContext;
use System\Exceptions;

abstract class Command
{
    public function execute(RequestContext $requestContext)
    {
        $method = str_replace(' ','',ucwords(strtolower(str_replace('-',' ',$requestContext->getRequestUrlParam(1)))));
        if(method_exists($this, $method) and is_callable( array($this, $method ) ) )
        {
            return $this->$method($requestContext);
        }
        return $this->doExecute($requestContext);
    }
    protected abstract function doExecute(RequestContext $requestContext);
} 