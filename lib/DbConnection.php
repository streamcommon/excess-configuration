<?php
/**
 * This file is part of the streamcommon/excess-configuration package, a StreamCommon open software project.
 *
 * @copyright (c) 2019 StreamCommon Team
 * @see https://github.com/streamcommon/excess-configuration
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Streamcommon\Excess\Configuration;

/**
 * Class DbConnection
 *
 * @package Streamcommon\Excess\Configuration
 */
class DbConnection extends Connection
{
    /** @var string|null */
    protected $dbName;
    /** @var string|null */
    protected $user;
    /** @var string|null */
    protected $password;

    /**
     * Get dbName
     *
     * @return string|null
     */
    public function getDbName(): ?string
    {
        return $this->dbName;
    }

    /**
     * Set dbName
     *
     * @param string|null $dbName
     * @return DbConnection
     */
    public function setDbName(?string $dbName): DbConnection
    {
        $this->dbName = $dbName;
        return $this;
    }

    /**
     * Get user
     *
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param string|null $user
     * @return Connection
     */
    public function setUser(?string $user): Connection
    {
        $this->user = $user;
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
     * @return Connection
     */
    public function setPassword(?string $password): Connection
    {
        $this->password = $password;
        return $this;
    }
}
