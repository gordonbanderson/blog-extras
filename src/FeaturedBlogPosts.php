<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 10/09/18
 * Time: 18:35
 */

namespace Suilven\Blog;



use SilverStripe\Blog\Model\BlogPost;
use SilverStripe\Core\Extension;

class FeaturedBlogPosts extends Extension
{
    public function FeaturedPosts()
    {
        return BlogPost::get()->filter('Featured', true);
    }

    public function UnFeaturedPosts()
    {
        //@todo 'false' breaks PostgreSQL, need to do a database source check?
        return BlogPost::get()->filter('Featured', 0);
    }

}
