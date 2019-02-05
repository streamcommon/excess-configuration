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

namespace Streamcommon\Excess\Configuration\Options;

use Streamcommon\Excess\Configuration\Exception\{InvalidArgumentException};
use Zend\Stdlib\AbstractOptions;

/**
 * Class AMQPConfiguration
 *
 * @package Streamcommon\Excess\Configuration\Options
 */
class AMQPConfiguration extends AbstractOptions
{
    /** @var string|null */
    protected $queue;
    /** @var string|null */
    protected $exchange;
    /** @var array */
    protected $routingKeys = [];
    /** @var AMQPConnection */
    protected $connection;

    /**
     * AMQPConfiguration constructor.
     *
     * @param null $options
     */
    public function __construct($options = null)
    {
        $this->connection = new AMQPConnection();
        parent::__construct($options);
    }

    /**
     * Get queue
     *
     * @return string|null
     */
    public function getQueue(): ?string
    {
        return $this->queue;
    }

    /**
     * Set queue
     *
     * @param string|null $queue
     * @return AMQPConfiguration
     */
    public function setQueue(?string $queue): AMQPConfiguration
    {
        $this->queue = $queue;
        return $this;
    }

    /**
     * Get exchange
     *
     * @return string|null
     */
    public function getExchange(): ?string
    {
        return $this->exchange;
    }

    /**
     * Set exchange
     *
     * @param string|null $exchange
     * @return AMQPConfiguration
     */
    public function setExchange(?string $exchange): AMQPConfiguration
    {
        $this->exchange = $exchange;
        return $this;
    }

    /**
     * Get routingKeys
     *
     * @return array
     */
    public function getRoutingKeys(): array
    {
        return $this->routingKeys;
    }

    /**
     * Set routingKeys
     *
     * @param array $routingKeys
     * @return AMQPConfiguration
     */
    public function setRoutingKeys(array $routingKeys): AMQPConfiguration
    {
        $this->routingKeys = $routingKeys;
        return $this;
    }

    /**
     * Get connection
     *
     * @return AMQPConnection
     */
    public function getConnection(): AMQPConnection
    {
        return $this->connection;
    }

    /**
     * Set connection
     *
     * @param AMQPConnection|array $connection
     * @return AMQPConfiguration
     */
    public function setConnection($connection): AMQPConfiguration
    {
        if (is_array($connection)) {
            $connection = new AMQPConnection($connection);
        }
        if (!$connection instanceof AMQPConnection) {
            throw new InvalidArgumentException(
                sprintf(
                    'Expected AMQPConnection instance, got %s',
                    is_object($connection) ? get_class($connection) : gettype($connection)
                )
            );
        }
        $this->connection = $connection;
        return $this;
    }
}
