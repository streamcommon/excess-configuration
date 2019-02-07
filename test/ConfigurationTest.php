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
use Streamcommon\Excess\Configuration\{Credential, Connection, DbConnection, AMQPConnection};

/**
 * Class ConfigurationTest
 *
 * @package StreamCommon\Test\Excess\Configuration
 */
class ConfigurationTest extends TestCase
{
    /**
     * Test credential options
     */
    public function testCredentialWithArray(): void
    {
        $options = new Credential([
            'username' => 'test',
            'password' => 'test',
        ]);
        $this->assertEquals('test', $options->getUsername());
        $this->assertEquals('test', $options->getPassword());
    }

    /**
     * Test connection options
     */
    public function testConnectionWithArray(): void
    {
        $options = new Connection([
            'host' => 'localhost',
            'port' => 8080
        ]);
        $this->assertEquals('localhost', $options->getHost());
        $this->assertEquals(8080, $options->getPort());
    }

    /**
     * Test DbConnection options
     */
    public function testDbConnectionWithArray(): void
    {
        $options = new DbConnection([
            'host' => 'localhost',
            'port' => 8080,
            'db_name' => 'test',
            'user' => 'test',
            'password' => 'test'
        ]);
        $this->assertEquals('localhost', $options->getHost());
        $this->assertEquals(8080, $options->getPort());
        $this->assertEquals('test', $options->getDbName());
        $this->assertEquals('test', $options->getUser());
        $this->assertEquals('test', $options->getPassword());
    }
}