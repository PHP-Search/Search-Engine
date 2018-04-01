<?php

/*
 * This file is part of PHP Search Engine.
 *
 * (c) masterwto <masterwto@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * @coversNothing
 */
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertSame(
            $this->app->version(),
            $this->response->getContent()
        );
    }
}
