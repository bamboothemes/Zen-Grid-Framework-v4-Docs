<?php namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Common\Data\Data;
use Grav\Common\Page\Page;

class Reading_TimePlugin extends Plugin
{
    public static function getSubscriptedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigInitialized' => ['onTwigInitialized', 0]
        ]);
    }

    public function onTwigInitialized()
    {
        $this->grav['twig']->twig()->addFilter(
            new \Twig_SimpleFilter('reading_time', [$this, 'readingTimeFilter'], ['is_safe' => ['html']])
        );
    }

    public function readingTimeFilter($content, $params = [])
    {
        $this->mergePluginConfig($this->grav['page'], $params);

        $words = str_word_count(strip_tags($content));
        $wpm = $this->config->get('word_per_minute');

        $minutes_short_count = floor($words / $wpm);
        $seconds_short_count = floor($words % $wpm / ($wpm / 60));

        $minutes_text = ($minutes_short_count <= 1) ? $this->config->get('minute_label') : $this->config->get('minutes_label');
        $seconds_text = ($seconds_short_count <= 1) ? $this->config->get('second_label') : $this->config->get('seconds_label');

        if ($this->config->get('round') == 'minutes') {
            $minutes_short_count = round(($minutes_short_count*60 + $seconds_short_count) / 60);

            if ($minutes_short_count < 1) {
                $minutes_short_count = 1;
            }

            $seconds_short_count = 0;
        }

        $minutes_long_count = number_format($minutes_short_count, 2);
        $seconds_long_count = number_format($seconds_short_count, 2);

        $replace = [
            'minutes_short_count'   => $minutes_short_count,
            'seconds_short_count'   => $seconds_short_count,
            'minutes_long_count'    => $minutes_long_count,
            'seconds_long_count'    => $seconds_long_count,
            'minutes_text'          => $minutes_text,
            'seconds_text'          => $seconds_text
        ];

        $result = $this->config->get('format');

        foreach ($replace as $key => $value) {
            $result = str_replace('{' . $key . '}', $value, $result);
        }

        return $result;
    }

    private function mergePluginConfig(Page $page, $params = [])
    {
        $this->config = new Data((array) $this->grav['config']->get('plugins.reading_time'));

        if (isset($page->header()->reading_time)) {
            if (is_array($page->header()->reading_time)) {
                $this->config = new Data(array_replace_recursive($this->config->toArray(), $page->header()->reading_time));
            } else {
                $this->config->set('enabled', $page->header()->reading_time);
            }
        }

        $this->config = new Data(array_replace_recursive($this->config->toArray(), $params));
    }
}
