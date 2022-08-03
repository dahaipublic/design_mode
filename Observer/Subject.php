<?php

namespace Ba\DesignModel\Observer;

/**
 * 具体 Subject
 *
 * @package Ba\DesignModel\Observer
 */
class Subject extends SubjectAbstract
{
    public function publish()
    {
        echo '我做了某事<br>';
        $this->notify();
    }
}