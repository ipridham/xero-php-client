<?php

namespace Picqer\Xero\Entities;

class TrackingCategory extends BaseEntity {

    protected $Option;
    protected $Name;


    public function getXmlName()
    {
        return 'TrackingCategory';
    }


}