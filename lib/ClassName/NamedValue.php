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

namespace Streamcommon\Excess\Configuration\ClassName;

use Zend\Stdlib\AbstractOptions;

/**
 * Class NamedValue
 *
 * @package Streamcommon\Excess\Configuration\ClassName
 */
class NamedValue extends AbstractOptions
{
    /** @var string|null */
    protected $name;
    /** @var string|null */
    protected $class;

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string|null $name
     * @return NamedValue
     */
    public function setName(?string $name): NamedValue
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get class
     *
     * @return string|null
     */
    public function getClass(): ?string
    {
        return $this->class;
    }

    /**
     * Set class
     *
     * @param string|null $class
     * @return NamedValue
     */
    public function setClass(?string $class): NamedValue
    {
        $this->class = $class;
        return $this;
    }
}
