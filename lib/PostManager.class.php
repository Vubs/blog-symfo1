<?php

class PostManager {

    public function depublishPost($id)
    {
        //
        $postToDepublish = Doctrine_Core::getTable('BlogPost')->find(array($id));

        $postToDepublish->delete();

    }


}