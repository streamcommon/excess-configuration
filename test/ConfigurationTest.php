<?php
/**
 * This file is part of the Common package, a StreamCommon open software project.
 *
 * @copyright (c) 2019 StreamCommon Team.
 * @see https://github.com/streamcommon/excess-configuration
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace StreamCommon\Test\Excess\Configuration;

use PHPUnit\Framework\TestCase;
use Streamcommon\Excess\Configuration\Credential;

/**
 * Class ConfigurationTest
 *
 * @package StreamCommon\Test\Excess\Configuration
 */
class ConfigurationTest extends TestCase
{
    public function testCredentialWithArray()
    {
        $options = new Credential([
            'username' => 'test',
            'password' => 'test',
        ]);
        $this->assertEquals('test', $options->getUsername());
        $this->assertEquals('test', $options->getPassword());
    }
}