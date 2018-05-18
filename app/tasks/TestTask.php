<?php

namespace App\Tasks;

use App\Models\Conf;

class TestTask extends Task
{

    public function mainAction()
    {
        $d = new Conf();
        $d->key='sss2';
        $d->save();
    }

}

