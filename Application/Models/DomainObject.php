<?php
/**
 * Phoenix Laboratories NG.
 * Author: J. C. Nwobodo (jc.nwobodo@gmail.com)
 * Project: BareBones PHP Framework
 * Date:    11/1/2015
 * Time:    10:34 PM
 */

namespace Application\Models;

use System\Models\DomainObject as SystemDomainObject;

abstract class DomainObject extends SystemDomainObject
{
    public function __construct($id=null)
    {
        parent::__construct($id);
    }
}