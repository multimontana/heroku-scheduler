<?php

namespace multimontana\HerokuSchedulerBundle\Command;

use multimontana\HerokuSchedulerBundle\Events;

class SchedulerHourlyCommand extends SchedulerBaseCommand
{

    /**
     * @return string
     */
    protected function getSchedulerName()
    {
        return 'hourly';
    }

    /**
     * @return string
     */
    protected function getSchedulerEvent()
    {
        return Events::HOURLY;
    }
}
