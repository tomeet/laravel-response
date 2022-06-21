<?php

/*
 * This file is part of the tomeet/laravel-response.
 *
 * (c) Tomeet <tomeet@sohu.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tomeet\Response\Laravel\Support\Serializers;

class SimpleArraySerializer extends ArraySerializer
{
    /**
     * Serialize a collection.
     *
     * @param  string  $resourceKey
     * @param  array  $data
     * @return array
     */
    public function collection($resourceKey, array $data)
    {
        return $data;
    }
}
