<?php

namespace Possible\Core;

use Possible\Service\Database;
use Possible\Service\File;
 
class Kernel
{
    public function __construct()
    {     
        $db = new Database();
        $fans = $db->getResults('fanwall');

        $file = new File();
        $file->createExcel($fans);
    }
}
