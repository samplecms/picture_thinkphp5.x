<?php
namespace cms;
use think\Request; 
use tp\theme\Theme;
class base extends Theme
{
     
    public function __construct(Request $request = null)
    { 
        return parent::__construct($request);
    }


     


}
