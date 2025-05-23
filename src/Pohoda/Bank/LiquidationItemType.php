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

namespace Pohoda\Bank;

/**
 * Class representing LiquidationItemType.
 *
 * XSD Type: liquidationItemType
 */
class LiquidationItemType
{
    private ?string $extId = null;

    /**
     * Text položky. Pokud nebude uveden, bude nastaven text z Globálního nastavení programu POHODA.
     */
    private ?string $text = null;

    /**
     * Množství na položce.Pro likvidaci dokladu vždy nastaveno "1".
     */
    private ?float $quantity = null;

    /**
     * Jednotková cena s/bez DPH (pouze pro JU nebo DE).
     */
    private ?string $payVAT = null;

    /**
     * Sazba DPH (pouze pro JU nebo DE).
     */
    private ?\Pohoda\Type\VatRateType $rateVAT = null;

    /**
     * Částka v Kč.
     */
    private ?\Pohoda\Bank\TypeCurrencyHomeItemType $homeCurrency = null;

    /**
     * Částka v cizí měně.
     */
    private ?\Pohoda\Bank\TypeCurrencyForeignItemType $foreignCurrency = null;

    /**
     * Částka v Kč (pouze pro JU a DE).
     */
    private ?\Pohoda\Type\TypeCurrencyHomeItemType $homeCurrencyJU = null;

    /**
     * Částka v cizí měně (pouze pro JU a DE).
     */
    private ?\Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrencyJU = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Pár. symbol.
     */
    private ?string $symPar = null;

    /**
     * Předkontace.
     */
    private ?\Pohoda\Type\RefType $accounting = null;

    /**
     * Členění DPH.
     */
    private ?\Pohoda\Type\ClassificationVATType $classificationVAT = null;

    /**
     * Členění KV DPH (pouze SK verze).
     */
    private ?\Pohoda\Type\RefType $classificationKVDPH = null;

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
     * Gets as text.
     *
     * Text položky. Pokud nebude uveden, bude nastaven text z Globálního nastavení programu POHODA.
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
     * Text položky. Pokud nebude uveden, bude nastaven text z Globálního nastavení programu POHODA.
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
     * Množství na položce.Pro likvidaci dokladu vždy nastaveno "1".
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
     * Množství na položce.Pro likvidaci dokladu vždy nastaveno "1".
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
     * Gets as payVAT.
     *
     * Jednotková cena s/bez DPH (pouze pro JU nebo DE).
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
     * Jednotková cena s/bez DPH (pouze pro JU nebo DE).
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
     * Sazba DPH (pouze pro JU nebo DE).
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
     * Sazba DPH (pouze pro JU nebo DE).
     *
     * @return self
     */
    public function setRateVAT(?\Pohoda\Type\VatRateType $rateVAT = null)
    {
        $this->rateVAT = $rateVAT;

        return $this;
    }

    /**
     * Gets as homeCurrency.
     *
     * Částka v Kč.
     *
     * @return \Pohoda\Bank\TypeCurrencyHomeItemType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency.
     *
     * Částka v Kč.
     *
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Bank\TypeCurrencyHomeItemType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;

        return $this;
    }

    /**
     * Gets as foreignCurrency.
     *
     * Částka v cizí měně.
     *
     * @return \Pohoda\Bank\TypeCurrencyForeignItemType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency.
     *
     * Částka v cizí měně.
     *
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\Bank\TypeCurrencyForeignItemType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;

        return $this;
    }

    /**
     * Gets as homeCurrencyJU.
     *
     * Částka v Kč (pouze pro JU a DE).
     *
     * @return \Pohoda\Type\TypeCurrencyHomeItemType
     */
    public function getHomeCurrencyJU()
    {
        return $this->homeCurrencyJU;
    }

    /**
     * Sets a new homeCurrencyJU.
     *
     * Částka v Kč (pouze pro JU a DE).
     *
     * @return self
     */
    public function setHomeCurrencyJU(?\Pohoda\Type\TypeCurrencyHomeItemType $homeCurrencyJU = null)
    {
        $this->homeCurrencyJU = $homeCurrencyJU;

        return $this;
    }

    /**
     * Gets as foreignCurrencyJU.
     *
     * Částka v cizí měně (pouze pro JU a DE).
     *
     * @return \Pohoda\Type\TypeCurrencyForeignItemType
     */
    public function getForeignCurrencyJU()
    {
        return $this->foreignCurrencyJU;
    }

    /**
     * Sets a new foreignCurrencyJU.
     *
     * Částka v cizí měně (pouze pro JU a DE).
     *
     * @return self
     */
    public function setForeignCurrencyJU(?\Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrencyJU = null)
    {
        $this->foreignCurrencyJU = $foreignCurrencyJU;

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
     * Gets as symPar.
     *
     * Pár. symbol
     *
     * @return string
     */
    public function getSymPar()
    {
        return $this->symPar;
    }

    /**
     * Sets a new symPar.
     *
     * Pár. symbol
     *
     * @param string $symPar
     *
     * @return self
     */
    public function setSymPar($symPar)
    {
        $this->symPar = $symPar;

        return $this;
    }

    /**
     * Gets as accounting.
     *
     * Předkontace.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting.
     *
     * Předkontace.
     *
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\RefType $accounting = null)
    {
        $this->accounting = $accounting;

        return $this;
    }

    /**
     * Gets as classificationVAT.
     *
     * Členění DPH.
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getClassificationVAT()
    {
        return $this->classificationVAT;
    }

    /**
     * Sets a new classificationVAT.
     *
     * Členění DPH.
     *
     * @return self
     */
    public function setClassificationVAT(?\Pohoda\Type\ClassificationVATType $classificationVAT = null)
    {
        $this->classificationVAT = $classificationVAT;

        return $this;
    }

    /**
     * Gets as classificationKVDPH.
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getClassificationKVDPH()
    {
        return $this->classificationKVDPH;
    }

    /**
     * Sets a new classificationKVDPH.
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @return self
     */
    public function setClassificationKVDPH(?\Pohoda\Type\RefType $classificationKVDPH = null)
    {
        $this->classificationKVDPH = $classificationKVDPH;

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
}
