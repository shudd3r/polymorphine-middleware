<?php

/*
 * This file is part of Polymorphine/Middleware package.
 *
 * (c) Shudd3r <q3.shudder@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Polymorphine\Middleware\Tests\Fixtures;


class ExecutionOrder
{
    public static $processIdList = [];

    public static function reset()
    {
        self::$processIdList = [];
    }

    public static function add(string $id)
    {
        self::$processIdList[] = $id;
    }
}
