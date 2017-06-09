<?php

namespace Possible\Service;

use \Xls;
use Possible\Service\Database;

class File
{
    public function __construct()
    {     

    }

    public function createExcel($objects)
    {  
        $workbook = new Xls\Workbook();

        $worksheet = $workbook->addWorksheet('My first worksheet');

        $worksheet->write(0, 0, 'ID');
        $worksheet->write(0, 1, 'Name');
        $worksheet->write(0, 2, 'Statement');
        $worksheet->write(0, 3, 'Description');
        $worksheet->write(0, 4, 'Attachment');
        $worksheet->write(0, 5, 'Function');
        $worksheet->write(0, 6, 'Region');
        $worksheet->write(0, 7, 'Category');
        $worksheet->write(0, 8, 'Date');

        $i = 1;
        foreach ($objects as $obj) {

            $worksheet->write($i, 0, $obj['id']);
            $worksheet->write($i, 1, $obj['name']);
            $worksheet->write($i, 2, $obj['statement']);
            $worksheet->write($i, 3, $obj['description']);
            $worksheet->write($i, 4, 'http://157.163.152:8080' . $obj['attachment']);
            $worksheet->write($i, 5, $obj['function']);
            $worksheet->write($i, 6, Database::getRegion($obj['region_id']));
            $worksheet->write($i, 7, Database::getCategory($obj['category_id']));
            $worksheet->write($i, 8, $obj['created_at']);

            $i++;
        }

        $workbook->save('data/fans.xls');
    }

}

