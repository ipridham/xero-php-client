<?php

namespace Picqer\Xero\Entities;

class CreditNote extends BaseEntity {
//ACCRECCREDIT

    protected $Type;
    protected $Date;
    protected $CreditNoteNumber;
    protected $CreditNoteID;
    protected $Status;
    protected $LineAmountTypes;
    protected $LineItems = [];
    protected $Contact = [];

    protected function getChildEntities()
    {
        return [
            'LineItems' => 'InvoiceLineItem',
        ];
    }

    protected function getForeignEntities()
    {
        return [
            'Contact' => 'Contact'
        ];
    }

    public function getEndpoint()
    {
        return '/creditnotes';
    }


    public function getPrimaryKey()
    {
        return 'CreditNoteID';
    }

    public function getXmlCollectionName()
    {
        return 'CreditNotes';
    }

    public function getXmlName()
    {
        return 'CreditNote';
    }

    public function addLineItem($lineitem)
    {
        $this->LineItems[] = $lineitem;
    }

}
