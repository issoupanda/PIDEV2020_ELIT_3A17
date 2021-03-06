<?php

namespace CMEN\GoogleChartsBundle\Output\Javascript;

use CMEN\GoogleChartsBundle\GoogleCharts\Events;
use CMEN\GoogleChartsBundle\Output\EventsOutputInterface;

class EventsOutput implements EventsOutputInterface
{
    /**
     * {@inheritdoc}
     */
    public function draw(Events $events, $chartName)
    {
        $js = '';

        foreach ($events->getListeners() as $listener) {
            $js .= 'google.visualization.events.addListener('.$chartName.", '".$listener->getType().
                "', ".$listener->getFunction().');';
        }

        return $js;
    }
}
