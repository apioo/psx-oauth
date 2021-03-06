<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2018 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PSX\Oauth\Tests\Signature;

use PHPUnit\Framework\TestCase;
use PSX\Oauth\Signature\PLAINTEXT;

/**
 * PLAINTEXTTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class PLAINTEXTTest extends TestCase
{
    public function testSignature()
    {
        $signature = new PLAINTEXT();

        $this->assertEquals('djr9rjt0jd78jf88%26jjd999tj88uiths3', $signature->build('', 'djr9rjt0jd78jf88', 'jjd999tj88uiths3'));
        $this->assertEquals('djr9rjt0jd78jf88%26jjd99%2524tj88uiths3', $signature->build('', 'djr9rjt0jd78jf88', 'jjd99$tj88uiths3'));
        $this->assertEquals('djr9rjt0jd78jf88%26', $signature->build('', 'djr9rjt0jd78jf88'));
    }
}
