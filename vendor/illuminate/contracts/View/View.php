<?php

namespace Illuminate\Contracts\View;

use Illuminate\Contracts\Support\Renderable;

interface View extends Renderable
{
    /**
     * Get the name of the views.
     *
     * @return string
     */
    public function name();

    /**
     * Add a piece of data to the views.
     *
     * @param  string|array  $key
     * @param  mixed   $value
     * @return $this
     */
    public function with($key, $value = null);
}
