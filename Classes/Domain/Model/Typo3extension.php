<?php

declare(strict_types=1);

namespace Typo3\Typo3extension\Domain\Model;


/**
 * This file is part of the "Typo3 Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2025 Malhar Rathod <rathodm1996@gmail.com>
 */

/**
 * Typo3extension
 */
class Typo3extension extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name;

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
