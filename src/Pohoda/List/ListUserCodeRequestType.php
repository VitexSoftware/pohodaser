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

namespace Pohoda\List;

/**
 * Class representing ListUserCodeRequestType.
 *
 * XSD Type: listUserCodeRequestType
 */
class ListUserCodeRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $listVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @var \Pohoda\List\RequestUserCodeType[]
     */
    private array $requestUserCode = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as listVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getListVersion()
    {
        return $this->listVersion;
    }

    /**
     * Sets a new listVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $listVersion
     *
     * @return self
     */
    public function setListVersion($listVersion)
    {
        $this->listVersion = $listVersion;

        return $this;
    }

    /**
     * Adds as limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @return self
     */
    public function addToLimit(\Pohoda\Filter\LimitType $limit)
    {
        $this->limit[] = $limit;

        return $this;
    }

    /**
     * isset limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLimit($index)
    {
        return isset($this->limit[$index]);
    }

    /**
     * unset limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @param int|string $index
     */
    public function unsetLimit($index): void
    {
        unset($this->limit[$index]);
    }

    /**
     * Gets as limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @return \Pohoda\Filter\LimitType[]
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Sets a new limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @param \Pohoda\Filter\LimitType[] $limit
     *
     * @return self
     */
    public function setLimit(?array $limit = null)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Adds as requestUserCode.
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @return self
     */
    public function addToRequestUserCode(\Pohoda\List\RequestUserCodeType $requestUserCode)
    {
        $this->requestUserCode[] = $requestUserCode;

        return $this;
    }

    /**
     * isset requestUserCode.
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestUserCode($index)
    {
        return isset($this->requestUserCode[$index]);
    }

    /**
     * unset requestUserCode.
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @param int|string $index
     */
    public function unsetRequestUserCode($index): void
    {
        unset($this->requestUserCode[$index]);
    }

    /**
     * Gets as requestUserCode.
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @return \Pohoda\List\RequestUserCodeType[]
     */
    public function getRequestUserCode()
    {
        return $this->requestUserCode;
    }

    /**
     * Sets a new requestUserCode.
     *
     * Atributy určují výběr uživatelských seznamů pro export. Pokud není zadán žádný, vyexportují se všechny uživatelské seznamy.
     *
     * @param \Pohoda\List\RequestUserCodeType[] $requestUserCode
     *
     * @return self
     */
    public function setRequestUserCode(?array $requestUserCode = null)
    {
        $this->requestUserCode = $requestUserCode;

        return $this;
    }
}
