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

namespace Streamcommon\Excess\Configuration;

use Zend\Stdlib\AbstractOptions;

/**
 * Class Credential
 *
 * @package Streamcommon\Excess\Configuration
 */
class Credential extends AbstractOptions
{
    /** @var string|null */
    protected $username;
    /** @var string|null */
    protected $password;

    /**
     * Get username
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Set username
     *
     * @param string|null $username
     * @return Credential
     */
    public function setUsername(?string $username): Credential
    {
        $this->username = $username;
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
     * @return Credential
     */
    public function setPassword(?string $password): Credential
    {
        $this->password = $password;
        return $this;
    }
}
