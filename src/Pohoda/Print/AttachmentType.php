<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\Print;

/**
 * Class representing AttachmentType.
 *
 * XSD Type: attachmentType
 */
class AttachmentType
{
    /**
     * @var string[]
     */
    private array $attachment = [
    ];

    /**
     * Adds as attachment.
     *
     * @param string $attachment
     *
     * @return self
     */
    public function addToAttachment($attachment)
    {
        $this->attachment[] = $attachment;

        return $this;
    }

    /**
     * isset attachment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAttachment($index)
    {
        return isset($this->attachment[$index]);
    }

    /**
     * unset attachment.
     *
     * @param int|string $index
     */
    public function unsetAttachment($index): void
    {
        unset($this->attachment[$index]);
    }

    /**
     * Gets as attachment.
     *
     * @return string[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment.
     *
     * @param string[] $attachment
     *
     * @return self
     */
    public function setAttachment(array $attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }
}
