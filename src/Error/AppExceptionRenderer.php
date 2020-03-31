<?php

namespace App\Error;

use Cake\Error\ExceptionRenderer;

class AppExceptionRenderer extends ExceptionRenderer
{
    /**
     * レイアウトを切り替える
     */
    public function render()
    {

        return parent::render();
    }
}
