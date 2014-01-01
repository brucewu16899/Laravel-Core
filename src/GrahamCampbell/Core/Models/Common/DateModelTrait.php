<?php

/**
 * This file is part of Laravel Core by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Core\Models\Common;

use Carbon\Carbon;

/**
 * This is the date model trait.
 *
 * @package    Laravel-Core
 * @author     Graham Campbell
 * @copyright  Copyright 2013-2014 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Core/blob/develop/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Core
 */
trait DateModelTrait
{
    /**
     * Get the date.
     *
     * @return \Carbon\Carbon
     */
    public function getDate()
    {
        $date = new Carbon($this->date);
        return $date;
    }

    /**
     * Get the date by format.
     *
     * @param  string  $format
     * @return string
     */
    public function getDateByFormat($format)
    {
        $date = $this->getDate()->format($format);
        return $date;
    }

    /**
     * Get the formatted date.
     *
     * @return string
     */
    public function getFormattedDate()
    {
        $date = $this->getDateByFormat('l jS F Y \\- H:i:s');
        return $date;
    }
}
