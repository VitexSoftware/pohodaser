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

namespace Pohoda\Order;

/**
 * Class representing OrderItemType.
 *
 * XSD Type: orderItemType
 */
class OrderItemType
{
    /**
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadaných parametrů u dokladu.
     */
    private ?\Pohoda\Type\LinkItemType $link = null;

    /**
     * Vazba na doklad. Informace o vazbě položky exportovaného dokladu na položku jiného dokladu (pouze pro export).
     */
    private ?\Pohoda\Type\LinkedDocumentType $linkedDocument = null;

    /**
     * ID položky dokladu (jen pro export).
     */
    private ?int $id = null;
    private ?string $extId = null;

    /**
     * Vazba položky na položkovou zásobu (komplet nebo souprava). Vazba se vytváří přes extId.
     */
    private ?\Pohoda\Type\ParentCompStockType $parentCompStock = null;

    /**
     * Text položky.
     */
    private ?string $text = null;

    /**
     * Množství.
     */
    private ?float $quantity = null;

    /**
     * Dodáno.
     */
    private ?float $delivered = null;

    /**
     * Měrná jednotka.
     */
    private ?string $unit = null;

    /**
     * Koeficient.
     */
    private ?float $coefficient = null;

    /**
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA.
     */
    private ?string $payVAT = null;

    /**
     * Sazba DPH.
     */
    private ?\Pohoda\Type\VatRateType $rateVAT = null;

    /**
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     */
    private ?float $percentVAT = null;

    /**
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ.
     */
    private ?float $discountPercentage = null;

    /**
     * Kč.
     */
    private ?\Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency = null;

    /**
     * Cizí měna.
     */
    private ?\Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrency = null;

    /**
     * Druh služby (OSS).
     */
    private ?\Pohoda\Type\MOSStypeType $typeServiceMOSS = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Kód.
     */
    private ?string $code = null;

    /**
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     */
    private ?\Pohoda\Type\StockItemType $stockItem = null;

    /**
     * Identifikátor zásoby u textových položek s vazbou na sklad. Pro import pouze pro textové položky s názvem položkové zásoby.
     */
    private ?\Pohoda\Type\LinkToStockType $linkToStock = null;

    /**
     * Příznak Přenesení daňové povinnosti (pouze pro Přijaté objednávky).
     */
    private ?bool $pDP = null;

    /**
     * Kód zboží (pouze pro Přijaté objednávky v SK verzi).
     */
    private ?string $codePDP = null;

    /**
     * Recyklační příspěvek položky. Pokud při importu dokladu tento element není na položce uveden, bude na skladové položce dokladu nastaven dle skladové zásoby. U textové položky nebude nastaven.
     */
    private ?\Pohoda\Type\RecyclingContribType $recyclingContrib = null;

    /**
     * Středisko.
     */
    private ?\Pohoda\Type\RefType $centre = null;

    /**
     * Činnost.
     */
    private ?\Pohoda\Type\RefType $activity = null;

    /**
     * Zakázka.
     */
    private ?\Pohoda\Type\RefType $contract = null;

    /**
     * Typ položky EET (pouze CZ verze).
     */
    private ?string $eETItem = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private ?array $parameters = null;

    /**
     * Gets as link.
     *
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadaných parametrů u dokladu.
     *
     * @return \Pohoda\Type\LinkItemType
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link.
     *
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadaných parametrů u dokladu.
     *
     * @return self
     */
    public function setLink(?\Pohoda\Type\LinkItemType $link = null)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Gets as linkedDocument.
     *
     * Vazba na doklad. Informace o vazbě položky exportovaného dokladu na položku jiného dokladu (pouze pro export).
     *
     * @return \Pohoda\Type\LinkedDocumentType
     */
    public function getLinkedDocument()
    {
        return $this->linkedDocument;
    }

    /**
     * Sets a new linkedDocument.
     *
     * Vazba na doklad. Informace o vazbě položky exportovaného dokladu na položku jiného dokladu (pouze pro export).
     *
     * @return self
     */
    public function setLinkedDocument(?\Pohoda\Type\LinkedDocumentType $linkedDocument = null)
    {
        $this->linkedDocument = $linkedDocument;

        return $this;
    }

    /**
     * Gets as id.
     *
     * ID položky dokladu (jen pro export).
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * ID položky dokladu (jen pro export).
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as extId.
     *
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * @param string $extId
     *
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as parentCompStock.
     *
     * Vazba položky na položkovou zásobu (komplet nebo souprava). Vazba se vytváří přes extId.
     *
     * @return \Pohoda\Type\ParentCompStockType
     */
    public function getParentCompStock()
    {
        return $this->parentCompStock;
    }

    /**
     * Sets a new parentCompStock.
     *
     * Vazba položky na položkovou zásobu (komplet nebo souprava). Vazba se vytváří přes extId.
     *
     * @return self
     */
    public function setParentCompStock(?\Pohoda\Type\ParentCompStockType $parentCompStock = null)
    {
        $this->parentCompStock = $parentCompStock;

        return $this;
    }

    /**
     * Gets as text.
     *
     * Text položky.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text.
     *
     * Text položky.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets as quantity.
     *
     * Množství.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity.
     *
     * Množství.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as delivered.
     *
     * Dodáno.
     *
     * @return float
     */
    public function getDelivered()
    {
        return $this->delivered;
    }

    /**
     * Sets a new delivered.
     *
     * Dodáno.
     *
     * @param float $delivered
     *
     * @return self
     */
    public function setDelivered($delivered)
    {
        $this->delivered = $delivered;

        return $this;
    }

    /**
     * Gets as unit.
     *
     * Měrná jednotka.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit.
     *
     * Měrná jednotka.
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Gets as coefficient.
     *
     * Koeficient.
     *
     * @return float
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Sets a new coefficient.
     *
     * Koeficient.
     *
     * @param float $coefficient
     *
     * @return self
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Gets as payVAT.
     *
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA.
     *
     * @return string
     */
    public function getPayVAT()
    {
        return $this->payVAT;
    }

    /**
     * Sets a new payVAT.
     *
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA.
     *
     * @param string $payVAT
     *
     * @return self
     */
    public function setPayVAT($payVAT)
    {
        $this->payVAT = $payVAT;

        return $this;
    }

    /**
     * Gets as rateVAT.
     *
     * Sazba DPH.
     *
     * @return \Pohoda\Type\VatRateType
     */
    public function getRateVAT()
    {
        return $this->rateVAT;
    }

    /**
     * Sets a new rateVAT.
     *
     * Sazba DPH.
     *
     * @return self
     */
    public function setRateVAT(?\Pohoda\Type\VatRateType $rateVAT = null)
    {
        $this->rateVAT = $rateVAT;

        return $this;
    }

    /**
     * Gets as percentVAT.
     *
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @return float
     */
    public function getPercentVAT()
    {
        return $this->percentVAT;
    }

    /**
     * Sets a new percentVAT.
     *
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @param float $percentVAT
     *
     * @return self
     */
    public function setPercentVAT($percentVAT)
    {
        $this->percentVAT = $percentVAT;

        return $this;
    }

    /**
     * Gets as discountPercentage.
     *
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage.
     *
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ.
     *
     * @param float $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Gets as homeCurrency.
     *
     * Kč.
     *
     * @return \Pohoda\Type\TypeCurrencyHomeItemType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency.
     *
     * Kč.
     *
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;

        return $this;
    }

    /**
     * Gets as foreignCurrency.
     *
     * Cizí měna.
     *
     * @return \Pohoda\Type\TypeCurrencyForeignItemType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency.
     *
     * Cizí měna.
     *
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;

        return $this;
    }

    /**
     * Gets as typeServiceMOSS.
     *
     * Druh služby (OSS).
     *
     * @return \Pohoda\Type\MOSStypeType
     */
    public function getTypeServiceMOSS()
    {
        return $this->typeServiceMOSS;
    }

    /**
     * Sets a new typeServiceMOSS.
     *
     * Druh služby (OSS).
     *
     * @return self
     */
    public function setTypeServiceMOSS(?\Pohoda\Type\MOSStypeType $typeServiceMOSS = null)
    {
        $this->typeServiceMOSS = $typeServiceMOSS;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Poznámka.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note.
     *
     * Poznámka.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets as code.
     *
     * Kód.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code.
     *
     * Kód.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as stockItem.
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @return \Pohoda\Type\StockItemType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem.
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemType $stockItem = null)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Gets as linkToStock.
     *
     * Identifikátor zásoby u textových položek s vazbou na sklad. Pro import pouze pro textové položky s názvem položkové zásoby.
     *
     * @return \Pohoda\Type\LinkToStockType
     */
    public function getLinkToStock()
    {
        return $this->linkToStock;
    }

    /**
     * Sets a new linkToStock.
     *
     * Identifikátor zásoby u textových položek s vazbou na sklad. Pro import pouze pro textové položky s názvem položkové zásoby.
     *
     * @return self
     */
    public function setLinkToStock(?\Pohoda\Type\LinkToStockType $linkToStock = null)
    {
        $this->linkToStock = $linkToStock;

        return $this;
    }

    /**
     * Gets as pDP.
     *
     * Příznak Přenesení daňové povinnosti (pouze pro Přijaté objednávky).
     *
     * @return bool
     */
    public function getPDP()
    {
        return $this->pDP;
    }

    /**
     * Sets a new pDP.
     *
     * Příznak Přenesení daňové povinnosti (pouze pro Přijaté objednávky).
     *
     * @param bool $pDP
     *
     * @return self
     */
    public function setPDP($pDP)
    {
        $this->pDP = $pDP;

        return $this;
    }

    /**
     * Gets as codePDP.
     *
     * Kód zboží (pouze pro Přijaté objednávky v SK verzi).
     *
     * @return string
     */
    public function getCodePDP()
    {
        return $this->codePDP;
    }

    /**
     * Sets a new codePDP.
     *
     * Kód zboží (pouze pro Přijaté objednávky v SK verzi).
     *
     * @param string $codePDP
     *
     * @return self
     */
    public function setCodePDP($codePDP)
    {
        $this->codePDP = $codePDP;

        return $this;
    }

    /**
     * Gets as recyclingContrib.
     *
     * Recyklační příspěvek položky. Pokud při importu dokladu tento element není na položce uveden, bude na skladové položce dokladu nastaven dle skladové zásoby. U textové položky nebude nastaven.
     *
     * @return \Pohoda\Type\RecyclingContribType
     */
    public function getRecyclingContrib()
    {
        return $this->recyclingContrib;
    }

    /**
     * Sets a new recyclingContrib.
     *
     * Recyklační příspěvek položky. Pokud při importu dokladu tento element není na položce uveden, bude na skladové položce dokladu nastaven dle skladové zásoby. U textové položky nebude nastaven.
     *
     * @return self
     */
    public function setRecyclingContrib(?\Pohoda\Type\RecyclingContribType $recyclingContrib = null)
    {
        $this->recyclingContrib = $recyclingContrib;

        return $this;
    }

    /**
     * Gets as centre.
     *
     * Středisko.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre.
     *
     * Středisko.
     *
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Gets as activity.
     *
     * Činnost.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity.
     *
     * Činnost.
     *
     * @return self
     */
    public function setActivity(?\Pohoda\Type\RefType $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Gets as contract.
     *
     * Zakázka.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract.
     *
     * Zakázka.
     *
     * @return self
     */
    public function setContract(?\Pohoda\Type\RefType $contract = null)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Gets as eETItem.
     *
     * Typ položky EET (pouze CZ verze).
     *
     * @return string
     */
    public function getEETItem()
    {
        return $this->eETItem;
    }

    /**
     * Sets a new eETItem.
     *
     * Typ položky EET (pouze CZ verze).
     *
     * @param string $eETItem
     *
     * @return self
     */
    public function setEETItem($eETItem)
    {
        $this->eETItem = $eETItem;

        return $this;
    }

    /**
     * Adds as parameter.
     *
     * Volitelný parametr.
     *
     * @return self
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;

        return $this;
    }

    /**
     * isset parameters.
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters.
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     */
    public function unsetParameters($index): void
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters.
     *
     * Volitelný parametr.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters.
     *
     * Volitelný parametr.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters = null)
    {
        $this->parameters = $parameters;

        return $this;
    }
}
