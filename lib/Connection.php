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

use Zend\Stdlib\AbstractOptions;

/**
 * Class Connection
 *
 * @package Streamcommon\Excess\Configuration\Options
 */
class Connection extends AbstractOptions
{
    /** @var string|null */
    protected $host;
    /** @var string|null */
    protected $port;

    /**
     * Get host
     *
     * @return string|null
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * Set host
     *
     * @param string|null $host
     * @return Connection
     */
    public function setHost(?string $host): Connection
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Get port
     *
     * @return string|null
     */
    public function getPort(): ?string
    {
        return $this->port;
    }

    /**
     * Set port
     *
     * @param string|null $port
     * @return Connection
     */
    public function setPort(?string $port): Connection
    {
        $this->port = $port;
        return $this;
    }
}
