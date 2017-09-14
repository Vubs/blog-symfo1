<?php

/**
 * BlogCategory
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    cartefinancement
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class BlogCategory extends BaseBlogCategory
{
    /*public function __toString()
    {
        return $this->getName();
    }*/

    public function getPosts($max = 10)
    {
        $q = Doctrine_Query::create()
            ->from('BlogPost p')
            ->where('p.category_id = ?', $this->getId())
            ->limit($max);

        return Doctrine_Core::getTable('BlogPost')->getPosts($q);
    }

}
