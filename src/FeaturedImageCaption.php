<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 10/09/18
 * Time: 18:35
 */

namespace Suilven\Blog;


use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

class FeaturedImageCaption extends DataExtension
{
    private static $db = [
      'FeaturedImageCaption' => 'Varchar(255)'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Main',
            TextField::create('FeaturedImageCaption','Image Caption'),
            'CustomSummary'
        );
    }

}
