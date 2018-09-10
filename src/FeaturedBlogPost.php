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
use SilverStripe\ORM\DataExtension;

class FeaturedBlogPost extends DataExtension
{
    private static $db = [
      'Featured' => 'Boolean'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.PostOptions', CheckboxField::create('Featured','Is this blog post featured?'));
    }

}
