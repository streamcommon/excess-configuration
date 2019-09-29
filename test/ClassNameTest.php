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

namespace Streamcommon\Test\Excess\Configuration;

use PHPUnit\Framework\TestCase;
use Streamcommon\Excess\Configuration\ClassName\NamedValue;

/**
 * Class ClassNameTest
 *
 * @package Streamcommon\Test\Excess\Configuration
 */
class ClassNameTest extends TestCase
{
    /**
     * Test named value
     *
     * @return void
     */
    public function testNamedValue(): void
    {
        $options = new NamedValue([
            'name'  => 'test',
            'class' => 'testClassName'
        ]);
        $this->assertEquals('test', $options->getName());
        $this->assertEquals('testClassName', $options->getClass());
    }
}
