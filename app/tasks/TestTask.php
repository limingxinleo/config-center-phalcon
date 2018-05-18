<?php

namespace App\Tasks;

use App\Models\Conf;

class TestTask extends Task
{

    public function mainAction()
    {
        $d = Conf::findFirst([
            ['key' => 'sss2']
        ]);

        $d->val = 123;
        $d->save();
    }

}

