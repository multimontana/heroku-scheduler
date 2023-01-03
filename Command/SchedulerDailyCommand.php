<?php

namespace multimontana\HerokuSchedulerBundle\Command;

use multimontana\HerokuSchedulerBundle\Events;

class SchedulerDailyCommand extends SchedulerBaseCommand
{

    /**
     * @return string
     */
    protected function getSchedulerName()
    {
        return 'daily';
    }

    /**
     * @return string
     */
    protected function getSchedulerEvent()
    {
        return Events::DAILY;
    }
}
