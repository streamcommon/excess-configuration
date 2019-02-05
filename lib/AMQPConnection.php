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

/**
 * Class AMQPConnection
 *
 * @package Streamcommon\Excess\Configuration\Options
 */
class AMQPConnection extends Connection
{
    /** @var string|null */
    protected $login;
    /** @var string|null */
    protected $password;
    /** @var string|null */
    protected $vhost;

    /**
     * Get login
     *
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * Set login
     *
     * @param string|null $login
     * @return AMQPConnection
     */
    public function setLogin(?string $login): AMQPConnection
    {
        $this->login = $login;
        return $this;
    }

    /**
     * Get password
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set password
     *
     * @param string|null $password
     * @return AMQPConnection
     */
    public function setPassword(?string $password): AMQPConnection
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get vhost
     *
     * @return string|null
     */
    public function getVhost(): ?string
    {
        return $this->vhost;
    }

    /**
     * Set vhost
     *
     * @param string|null $vhost
     * @return AMQPConnection
     */
    public function setVhost(?string $vhost): AMQPConnection
    {
        $this->vhost = $vhost;
        return $this;
    }
}
