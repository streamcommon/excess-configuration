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
use Streamcommon\Excess\Configuration\{Credential, Connection, DbConnection, AMQPConnection, AMQPConfiguration};
use Streamcommon\Excess\Configuration\Exception\InvalidArgumentException;

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

    /**
     * Test AMQPConnection options
     */
    public function testAMQPConnectionWithArray(): void
    {
        $options = new AMQPConnection([
            'host' => 'localhost',
            'port' => 5672,
            'login' => 'test',
            'password' => 'test',
            'vhost' => '/'
        ]);
        $this->assertEquals('localhost', $options->getHost());
        $this->assertEquals(5672, $options->getPort());
        $this->assertEquals('test', $options->getLogin());
        $this->assertEquals('test', $options->getPassword());
        $this->assertEquals('/', $options->getVhost());
    }

    /**
     *  Test AMQPConfiguration options
     */
    public function testAMQPConfigurationWithArray(): void
    {
        $options = new AMQPConfiguration([
            'queue' => 'queue.1',
            'exchange' => 'exchange.1',
            'routing_keys' => [
                'routing.1'
            ],
            'connection' => [
                'host' => 'localhost',
                'port' => 5672,
                'login' => 'test',
                'password' => 'test',
                'vhost' => '/'
            ],
        ]);
        $this->assertEquals('queue.1', $options->getQueue());
        $this->assertEquals('exchange.1', $options->getExchange());
        $this->assertIsArray($options->getRoutingKeys());
        $this->assertInstanceOf(AMQPConnection::class, $options->getConnection());

        $this->expectException(InvalidArgumentException::class);
        $options->setConnection(new AMQPConfiguration());
    }
}
