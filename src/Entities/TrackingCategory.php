<?php

namespace Picqer\Xero\Entities;

class TrackingCategory extends BaseEntity {

    protected $TrackingCategoryID;
    protected $OptionName;


    public function getXmlName()
    {
        return 'TrackingCategory';
    }
   

}