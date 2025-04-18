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

namespace Pohoda\Type;

/**
 * Class representing LinkElemetType.
 *
 * XSD Type: linkElemetType
 */
class LinkElemetType
{
    /**
     * Agenda zdrojového dokladu.
     */
    private ?string $sourceAgenda = null;

    /**
     * Doklad.
     */
    private ?\Pohoda\Type\SourceDocumentType $sourceDocument = null;

    /**
     * Nastavení parametrů na zdrojovém dokladu po vytvoření vazby na doklad.
     */
    private ?\Pohoda\Type\SettingsSourceDocumentType $settingsSourceDocument = null;

    /**
     * Gets as sourceAgenda.
     *
     * Agenda zdrojového dokladu.
     *
     * @return string
     */
    public function getSourceAgenda()
    {
        return $this->sourceAgenda;
    }

    /**
     * Sets a new sourceAgenda.
     *
     * Agenda zdrojového dokladu.
     *
     * @param string $sourceAgenda
     *
     * @return self
     */
    public function setSourceAgenda($sourceAgenda)
    {
        $this->sourceAgenda = $sourceAgenda;

        return $this;
    }

    /**
     * Gets as sourceDocument.
     *
     * Doklad.
     *
     * @return \Pohoda\Type\SourceDocumentType
     */
    public function getSourceDocument()
    {
        return $this->sourceDocument;
    }

    /**
     * Sets a new sourceDocument.
     *
     * Doklad.
     *
     * @return self
     */
    public function setSourceDocument(\Pohoda\Type\SourceDocumentType $sourceDocument)
    {
        $this->sourceDocument = $sourceDocument;

        return $this;
    }

    /**
     * Gets as settingsSourceDocument.
     *
     * Nastavení parametrů na zdrojovém dokladu po vytvoření vazby na doklad.
     *
     * @return \Pohoda\Type\SettingsSourceDocumentType
     */
    public function getSettingsSourceDocument()
    {
        return $this->settingsSourceDocument;
    }

    /**
     * Sets a new settingsSourceDocument.
     *
     * Nastavení parametrů na zdrojovém dokladu po vytvoření vazby na doklad.
     *
     * @return self
     */
    public function setSettingsSourceDocument(?\Pohoda\Type\SettingsSourceDocumentType $settingsSourceDocument = null)
    {
        $this->settingsSourceDocument = $settingsSourceDocument;

        return $this;
    }
}
