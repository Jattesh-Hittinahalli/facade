<?php
namespace App\Larademo;
use Illuminate\support\Facades\Facade;

class LarademoFacade extends Facade
{
    protected static function  getFacadeAccessor()
    {
        return 'larademo'; 
    }
}
