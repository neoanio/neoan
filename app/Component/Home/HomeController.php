<?php

namespace App\Component\Home;

class HomeController
{
    /**
     * Home web endpoint
     *
     * @return string
     */
    public function init()
    {
        $title = config('app.name');
        $timeNeeded = $this->getTimeNeeded();

        return "<html><head><title>{$title}</title></head><body>time needed: {$timeNeeded}</body></html>";
    }

    /**
     * Home api endpoint
     *
     * @return array
     */
    public function getHome()
    {
        $timeNeeded = $this->getTimeNeeded();

        return [
            'time_needed' => $timeNeeded
        ];
    }

    /**
     * Get the time needed
     *
     * @return float
     */
    protected function getTimeNeeded() : float
    {
        return microtime(true) - NEOAN_START; // should be around 1ms
    }
}