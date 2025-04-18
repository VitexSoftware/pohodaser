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
 * Class representing ListActionPriceRequestType.
 *
 * XSD Type: listActionPriceRequestType
 */
class ListActionPriceRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $actionPricesVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\Filter\RequestActionPriceType[]
     */
    private array $requestActionPrice = [
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
     * Gets as actionPricesVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getActionPricesVersion()
    {
        return $this->actionPricesVersion;
    }

    /**
     * Sets a new actionPricesVersion.
     *
     * Požadovaná verze.
     *
     * @param string $actionPricesVersion
     *
     * @return self
     */
    public function setActionPricesVersion($actionPricesVersion)
    {
        $this->actionPricesVersion = $actionPricesVersion;

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
    public function setLimit(array $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Adds as requestActionPrice.
     *
     * @return self
     */
    public function addToRequestActionPrice(\Pohoda\Filter\RequestActionPriceType $requestActionPrice)
    {
        $this->requestActionPrice[] = $requestActionPrice;

        return $this;
    }

    /**
     * isset requestActionPrice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestActionPrice($index)
    {
        return isset($this->requestActionPrice[$index]);
    }

    /**
     * unset requestActionPrice.
     *
     * @param int|string $index
     */
    public function unsetRequestActionPrice($index): void
    {
        unset($this->requestActionPrice[$index]);
    }

    /**
     * Gets as requestActionPrice.
     *
     * @return \Pohoda\Filter\RequestActionPriceType[]
     */
    public function getRequestActionPrice()
    {
        return $this->requestActionPrice;
    }

    /**
     * Sets a new requestActionPrice.
     *
     * @param \Pohoda\Filter\RequestActionPriceType[] $requestActionPrice
     *
     * @return self
     */
    public function setRequestActionPrice(array $requestActionPrice)
    {
        $this->requestActionPrice = $requestActionPrice;

        return $this;
    }
}
