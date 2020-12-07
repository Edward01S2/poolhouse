<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Home extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      'partials.front-page',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function with()
    {
        return [
          'logo' => get_field('Logo', 'options'),
        ];
    }

}
