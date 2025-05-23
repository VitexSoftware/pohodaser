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

namespace Pohoda\AddressBook;

/**
 * Class representing AddressbookHeaderType.
 *
 * XSD Type: addressbookHeaderType
 */
class AddressbookHeaderType
{
    /**
     * ID adresy. Používá se při requestu.
     */
    private ?int $id = null;

    /**
     * Základní údaje.
     */
    private ?\Pohoda\Type\AddressType $identity = null;

    /**
     * Název kraje.
     */
    private ?string $region = null;

    /**
     * Telefon.
     */
    private ?string $phone = null;

    /**
     * Mobil.
     */
    private ?string $mobil = null;

    /**
     * Fax.
     */
    private ?string $fax = null;

    /**
     * Email.
     */
    private ?string $email = null;

    /**
     * Adresa www stránek.
     */
    private ?string $web = null;

    /**
     * ICQ adresa.
     */
    private ?string $iCQ = null;

    /**
     * Skype adresa.
     */
    private ?string $skype = null;

    /**
     * GPS souřadnice.
     */
    private ?string $gPS = null;

    /**
     * Skupiny.
     */
    private ?string $adGroup = null;

    /**
     * Klíče.
     */
    private ?string $adKey = null;

    /**
     * Kredit, tolerovaná výše pohledávek odběratele.
     */
    private ?float $credit = null;

    /**
     * Kredit, maximální výše pohledávek odběratele.
     */
    private ?float $creditMax = null;

    /**
     * Cenová hladina odběratele.
     */
    private ?string $priceIDS = null;

    /**
     * Splatno. Počet dnů splatnosti pohledávek (vydané faktury, vydané zálohové faktury, ostatní pohledávky).
     *  Při vložení adresy do faktury se nastaví datum splatnosti přičtením zde uvedeného počtu dnů k datu vystavení faktury.
     */
    private ?int $maturity = null;

    /**
     * Splatno. Počet dnů splatnosti závazků (přijaté faktury, přijaté zálohové faktury, ostatní závazky).
     *  Při vložení adresy do faktury se nastaví datum splatnosti přičtením zde uvedeného počtu dnů k datu vystavení faktury.
     */
    private ?int $maturityCommitments = null;

    /**
     * Forma úhrady.
     */
    private ?\Pohoda\Type\PaymentType $paymentType = null;

    /**
     * Číslo obchodní smlouvy (nesmí být povoleno v Globálním nastavení - Číslování zákazníků). Od verze 1.5.
     */
    private ?string $agreement = null;

    /**
     * Číslo dodavatele/odběratele dle zvolené číselné řady (musí být povoleno v Globálním nastavení - Číslování zákazníků).
     */
    private ?\Pohoda\Type\NumberADType $number = null;

    /**
     * Ostatní.
     */
    private ?string $ost1 = null;

    /**
     * Ostatní. Používá se také u kontaktní osoby.
     */
    private ?string $ost2 = null;

    /**
     * Název funkce. Používá se jen u kontaktní osoby.
     */
    private ?string $function = null;

    /**
     * Rodné číslo. Používá se jen u kontaktní osoby.
     */
    private ?string $personalIdentificationNumber = null;

    /**
     * Oslovení pro použití v korespondenci. Používá se jen u kontaktní osoby.
     */
    private ?string $salutation = null;

    /**
     * Pohlaví. Používá se jen u kontaktní osoby.
     */
    private ?string $sex = null;

    /**
     * Datum narození. Používá se jen u kontaktní osoby.
     */
    private ?\DateTime $dateOfBirth = null;

    /**
     * Klíč P1 / Dodavatel.
     */
    private ?string $p1 = null;

    /**
     * Klíč P2 / Odběratel.
     */
    private ?string $p2 = null;

    /**
     * Klíč P3.
     */
    private ?string $p3 = null;

    /**
     * Klíč P4.
     */
    private ?string $p4 = null;

    /**
     * Klíč P5.
     */
    private ?string $p5 = null;

    /**
     * Klíč P6.
     */
    private ?string $p6 = null;

    /**
     * Zpráva.
     */
    private ?string $message = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Interní poznámka.
     */
    private ?string $intNote = null;

    /**
     * Předkontace přijaté faktury.
     */
    private ?\Pohoda\Type\AccountingType $accountingReceivedInvoice = null;

    /**
     * Předkontace vydané faktury.
     */
    private ?\Pohoda\Type\AccountingType $accountingIssuedInvoice = null;

    /**
     * Členění DPH na přijaté faktuře.
     */
    private ?\Pohoda\Type\ClassificationVATType $classificationVATReceivedInvoice = null;

    /**
     * Členění DPH na vydané faktuře.
     */
    private ?\Pohoda\Type\ClassificationVATType $classificationVATIssuedInvoice = null;

    /**
     * Členění KV DPH, přijaté faktury (pouze SK verze).
     */
    private ?\Pohoda\Type\RefType $classificationKVDPHReceivedInvoice = null;

    /**
     * Členění KV DPH, vydané faktury (pouze SK verze).
     */
    private ?\Pohoda\Type\RefType $classificationKVDPHIssuedInvoice = null;

    /**
     * Bankovní účet nebo hotovostní pokladna, na kterou chcete nechat proplatit tuto pohledávku (používá se jen u pohledávek.) Pokud není účet uveden, POHODA použije účet uvedený v uživatelském nastavení uživatele (pod kterým je spuštěn XML import).
     */
    private ?\Pohoda\Type\AccountType $accountForInvoicing = null;

    /**
     * Odpovědná osoba.
     */
    private ?\Pohoda\Type\ResponsiblePersonType $responsiblePerson = null;

    /**
     * Počet dnů tolerované splatnosti faktur.
     */
    private ?int $toleranceMaturity = null;

    /**
     * ID - odkaz na cizí měnu, IDS - kod měny.
     */
    private ?\Pohoda\Type\RefType $foreignCurrency = null;

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
     * Obrat. Pouze pro export.
     */
    private ?float $turnover = null;

    /**
     * Obrat 2. Pouze pro export.
     */
    private ?float $turnover2 = null;

    /**
     * Volitelné parametry.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private ?array $parameters = null;

    /**
     * Odkaz kontaktní osoby na hlavní adresu.
     */
    private ?\Pohoda\Type\RefAddressType $refAddress = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private ?string $markRecord = null;

    /**
     * Štítky záznamu.
     *
     * @var \Pohoda\Type\LabelType[]
     */
    private ?array $labels = null;

    /**
     * Dopravce.
     */
    private ?\Pohoda\Type\CarrierType $carrier = null;

    /**
     * Gets as id.
     *
     * ID adresy. Používá se při requestu.
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
     * ID adresy. Používá se při requestu.
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
     * Gets as identity.
     *
     * Základní údaje
     *
     * @return \Pohoda\Type\AddressType
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Sets a new identity.
     *
     * Základní údaje
     *
     * @return self
     */
    public function setIdentity(?\Pohoda\Type\AddressType $identity = null)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Gets as region.
     *
     * Název kraje.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region.
     *
     * Název kraje.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Gets as phone.
     *
     * Telefon.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone.
     *
     * Telefon.
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets as mobil.
     *
     * Mobil.
     *
     * @return string
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Sets a new mobil.
     *
     * Mobil.
     *
     * @param string $mobil
     *
     * @return self
     */
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;

        return $this;
    }

    /**
     * Gets as fax.
     *
     * Fax.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax.
     *
     * Fax.
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Gets as email.
     *
     * Email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email.
     *
     * Email.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets as web.
     *
     * Adresa www stránek.
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Sets a new web.
     *
     * Adresa www stránek.
     *
     * @param string $web
     *
     * @return self
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Gets as iCQ.
     *
     * ICQ adresa.
     *
     * @return string
     */
    public function getICQ()
    {
        return $this->iCQ;
    }

    /**
     * Sets a new iCQ.
     *
     * ICQ adresa.
     *
     * @param string $iCQ
     *
     * @return self
     */
    public function setICQ($iCQ)
    {
        $this->iCQ = $iCQ;

        return $this;
    }

    /**
     * Gets as skype.
     *
     * Skype adresa.
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Sets a new skype.
     *
     * Skype adresa.
     *
     * @param string $skype
     *
     * @return self
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Gets as gPS.
     *
     * GPS souřadnice.
     *
     * @return string
     */
    public function getGPS()
    {
        return $this->gPS;
    }

    /**
     * Sets a new gPS.
     *
     * GPS souřadnice.
     *
     * @param string $gPS
     *
     * @return self
     */
    public function setGPS($gPS)
    {
        $this->gPS = $gPS;

        return $this;
    }

    /**
     * Gets as adGroup.
     *
     * Skupiny.
     *
     * @return string
     */
    public function getAdGroup()
    {
        return $this->adGroup;
    }

    /**
     * Sets a new adGroup.
     *
     * Skupiny.
     *
     * @param string $adGroup
     *
     * @return self
     */
    public function setAdGroup($adGroup)
    {
        $this->adGroup = $adGroup;

        return $this;
    }

    /**
     * Gets as adKey.
     *
     * Klíče.
     *
     * @return string
     */
    public function getAdKey()
    {
        return $this->adKey;
    }

    /**
     * Sets a new adKey.
     *
     * Klíče.
     *
     * @param string $adKey
     *
     * @return self
     */
    public function setAdKey($adKey)
    {
        $this->adKey = $adKey;

        return $this;
    }

    /**
     * Gets as credit.
     *
     * Kredit, tolerovaná výše pohledávek odběratele.
     *
     * @return float
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Sets a new credit.
     *
     * Kredit, tolerovaná výše pohledávek odběratele.
     *
     * @param float $credit
     *
     * @return self
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Gets as creditMax.
     *
     * Kredit, maximální výše pohledávek odběratele.
     *
     * @return float
     */
    public function getCreditMax()
    {
        return $this->creditMax;
    }

    /**
     * Sets a new creditMax.
     *
     * Kredit, maximální výše pohledávek odběratele.
     *
     * @param float $creditMax
     *
     * @return self
     */
    public function setCreditMax($creditMax)
    {
        $this->creditMax = $creditMax;

        return $this;
    }

    /**
     * Gets as priceIDS.
     *
     * Cenová hladina odběratele.
     *
     * @return string
     */
    public function getPriceIDS()
    {
        return $this->priceIDS;
    }

    /**
     * Sets a new priceIDS.
     *
     * Cenová hladina odběratele.
     *
     * @param string $priceIDS
     *
     * @return self
     */
    public function setPriceIDS($priceIDS)
    {
        $this->priceIDS = $priceIDS;

        return $this;
    }

    /**
     * Gets as maturity.
     *
     * Splatno. Počet dnů splatnosti pohledávek (vydané faktury, vydané zálohové faktury, ostatní pohledávky).
     *  Při vložení adresy do faktury se nastaví datum splatnosti přičtením zde uvedeného počtu dnů k datu vystavení faktury.
     *
     * @return int
     */
    public function getMaturity()
    {
        return $this->maturity;
    }

    /**
     * Sets a new maturity.
     *
     * Splatno. Počet dnů splatnosti pohledávek (vydané faktury, vydané zálohové faktury, ostatní pohledávky).
     *  Při vložení adresy do faktury se nastaví datum splatnosti přičtením zde uvedeného počtu dnů k datu vystavení faktury.
     *
     * @param int $maturity
     *
     * @return self
     */
    public function setMaturity($maturity)
    {
        $this->maturity = $maturity;

        return $this;
    }

    /**
     * Gets as maturityCommitments.
     *
     * Splatno. Počet dnů splatnosti závazků (přijaté faktury, přijaté zálohové faktury, ostatní závazky).
     *  Při vložení adresy do faktury se nastaví datum splatnosti přičtením zde uvedeného počtu dnů k datu vystavení faktury.
     *
     * @return int
     */
    public function getMaturityCommitments()
    {
        return $this->maturityCommitments;
    }

    /**
     * Sets a new maturityCommitments.
     *
     * Splatno. Počet dnů splatnosti závazků (přijaté faktury, přijaté zálohové faktury, ostatní závazky).
     *  Při vložení adresy do faktury se nastaví datum splatnosti přičtením zde uvedeného počtu dnů k datu vystavení faktury.
     *
     * @param int $maturityCommitments
     *
     * @return self
     */
    public function setMaturityCommitments($maturityCommitments)
    {
        $this->maturityCommitments = $maturityCommitments;

        return $this;
    }

    /**
     * Gets as paymentType.
     *
     * Forma úhrady.
     *
     * @return \Pohoda\Type\PaymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType.
     *
     * Forma úhrady.
     *
     * @return self
     */
    public function setPaymentType(?\Pohoda\Type\PaymentType $paymentType = null)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Gets as agreement.
     *
     * Číslo obchodní smlouvy (nesmí být povoleno v Globálním nastavení - Číslování zákazníků). Od verze 1.5.
     *
     * @return string
     */
    public function getAgreement()
    {
        return $this->agreement;
    }

    /**
     * Sets a new agreement.
     *
     * Číslo obchodní smlouvy (nesmí být povoleno v Globálním nastavení - Číslování zákazníků). Od verze 1.5.
     *
     * @param string $agreement
     *
     * @return self
     */
    public function setAgreement($agreement)
    {
        $this->agreement = $agreement;

        return $this;
    }

    /**
     * Gets as number.
     *
     * Číslo dodavatele/odběratele dle zvolené číselné řady (musí být povoleno v Globálním nastavení - Číslování zákazníků).
     *
     * @return \Pohoda\Type\NumberADType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Číslo dodavatele/odběratele dle zvolené číselné řady (musí být povoleno v Globálním nastavení - Číslování zákazníků).
     *
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberADType $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as ost1.
     *
     * Ostatní.
     *
     * @return string
     */
    public function getOst1()
    {
        return $this->ost1;
    }

    /**
     * Sets a new ost1.
     *
     * Ostatní.
     *
     * @param string $ost1
     *
     * @return self
     */
    public function setOst1($ost1)
    {
        $this->ost1 = $ost1;

        return $this;
    }

    /**
     * Gets as ost2.
     *
     * Ostatní. Používá se také u kontaktní osoby.
     *
     * @return string
     */
    public function getOst2()
    {
        return $this->ost2;
    }

    /**
     * Sets a new ost2.
     *
     * Ostatní. Používá se také u kontaktní osoby.
     *
     * @param string $ost2
     *
     * @return self
     */
    public function setOst2($ost2)
    {
        $this->ost2 = $ost2;

        return $this;
    }

    /**
     * Gets as function.
     *
     * Název funkce. Používá se jen u kontaktní osoby.
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function.
     *
     * Název funkce. Používá se jen u kontaktní osoby.
     *
     * @param string $function
     *
     * @return self
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Gets as personalIdentificationNumber.
     *
     * Rodné číslo. Používá se jen u kontaktní osoby.
     *
     * @return string
     */
    public function getPersonalIdentificationNumber()
    {
        return $this->personalIdentificationNumber;
    }

    /**
     * Sets a new personalIdentificationNumber.
     *
     * Rodné číslo. Používá se jen u kontaktní osoby.
     *
     * @param string $personalIdentificationNumber
     *
     * @return self
     */
    public function setPersonalIdentificationNumber($personalIdentificationNumber)
    {
        $this->personalIdentificationNumber = $personalIdentificationNumber;

        return $this;
    }

    /**
     * Gets as salutation.
     *
     * Oslovení pro použití v korespondenci. Používá se jen u kontaktní osoby.
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Sets a new salutation.
     *
     * Oslovení pro použití v korespondenci. Používá se jen u kontaktní osoby.
     *
     * @param string $salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Gets as sex.
     *
     * Pohlaví. Používá se jen u kontaktní osoby.
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Sets a new sex.
     *
     * Pohlaví. Používá se jen u kontaktní osoby.
     *
     * @param string $sex
     *
     * @return self
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Gets as dateOfBirth.
     *
     * Datum narození. Používá se jen u kontaktní osoby.
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets a new dateOfBirth.
     *
     * Datum narození. Používá se jen u kontaktní osoby.
     *
     * @return self
     */
    public function setDateOfBirth(?\DateTime $dateOfBirth = null)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Gets as p1.
     *
     * Klíč P1 / Dodavatel.
     *
     * @return string
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * Sets a new p1.
     *
     * Klíč P1 / Dodavatel.
     *
     * @param string $p1
     *
     * @return self
     */
    public function setP1($p1)
    {
        $this->p1 = $p1;

        return $this;
    }

    /**
     * Gets as p2.
     *
     * Klíč P2 / Odběratel.
     *
     * @return string
     */
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * Sets a new p2.
     *
     * Klíč P2 / Odběratel.
     *
     * @param string $p2
     *
     * @return self
     */
    public function setP2($p2)
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * Gets as p3.
     *
     * Klíč P3.
     *
     * @return string
     */
    public function getP3()
    {
        return $this->p3;
    }

    /**
     * Sets a new p3.
     *
     * Klíč P3.
     *
     * @param string $p3
     *
     * @return self
     */
    public function setP3($p3)
    {
        $this->p3 = $p3;

        return $this;
    }

    /**
     * Gets as p4.
     *
     * Klíč P4.
     *
     * @return string
     */
    public function getP4()
    {
        return $this->p4;
    }

    /**
     * Sets a new p4.
     *
     * Klíč P4.
     *
     * @param string $p4
     *
     * @return self
     */
    public function setP4($p4)
    {
        $this->p4 = $p4;

        return $this;
    }

    /**
     * Gets as p5.
     *
     * Klíč P5.
     *
     * @return string
     */
    public function getP5()
    {
        return $this->p5;
    }

    /**
     * Sets a new p5.
     *
     * Klíč P5.
     *
     * @param string $p5
     *
     * @return self
     */
    public function setP5($p5)
    {
        $this->p5 = $p5;

        return $this;
    }

    /**
     * Gets as p6.
     *
     * Klíč P6.
     *
     * @return string
     */
    public function getP6()
    {
        return $this->p6;
    }

    /**
     * Sets a new p6.
     *
     * Klíč P6.
     *
     * @param string $p6
     *
     * @return self
     */
    public function setP6($p6)
    {
        $this->p6 = $p6;

        return $this;
    }

    /**
     * Gets as message.
     *
     * Zpráva.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message.
     *
     * Zpráva.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

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
     * Gets as intNote.
     *
     * Interní poznámka.
     *
     * @return string
     */
    public function getIntNote()
    {
        return $this->intNote;
    }

    /**
     * Sets a new intNote.
     *
     * Interní poznámka.
     *
     * @param string $intNote
     *
     * @return self
     */
    public function setIntNote($intNote)
    {
        $this->intNote = $intNote;

        return $this;
    }

    /**
     * Gets as accountingReceivedInvoice.
     *
     * Předkontace přijaté faktury.
     *
     * @return \Pohoda\Type\AccountingType
     */
    public function getAccountingReceivedInvoice()
    {
        return $this->accountingReceivedInvoice;
    }

    /**
     * Sets a new accountingReceivedInvoice.
     *
     * Předkontace přijaté faktury.
     *
     * @return self
     */
    public function setAccountingReceivedInvoice(?\Pohoda\Type\AccountingType $accountingReceivedInvoice = null)
    {
        $this->accountingReceivedInvoice = $accountingReceivedInvoice;

        return $this;
    }

    /**
     * Gets as accountingIssuedInvoice.
     *
     * Předkontace vydané faktury.
     *
     * @return \Pohoda\Type\AccountingType
     */
    public function getAccountingIssuedInvoice()
    {
        return $this->accountingIssuedInvoice;
    }

    /**
     * Sets a new accountingIssuedInvoice.
     *
     * Předkontace vydané faktury.
     *
     * @return self
     */
    public function setAccountingIssuedInvoice(?\Pohoda\Type\AccountingType $accountingIssuedInvoice = null)
    {
        $this->accountingIssuedInvoice = $accountingIssuedInvoice;

        return $this;
    }

    /**
     * Gets as classificationVATReceivedInvoice.
     *
     * Členění DPH na přijaté faktuře.
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getClassificationVATReceivedInvoice()
    {
        return $this->classificationVATReceivedInvoice;
    }

    /**
     * Sets a new classificationVATReceivedInvoice.
     *
     * Členění DPH na přijaté faktuře.
     *
     * @return self
     */
    public function setClassificationVATReceivedInvoice(?\Pohoda\Type\ClassificationVATType $classificationVATReceivedInvoice = null)
    {
        $this->classificationVATReceivedInvoice = $classificationVATReceivedInvoice;

        return $this;
    }

    /**
     * Gets as classificationVATIssuedInvoice.
     *
     * Členění DPH na vydané faktuře.
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getClassificationVATIssuedInvoice()
    {
        return $this->classificationVATIssuedInvoice;
    }

    /**
     * Sets a new classificationVATIssuedInvoice.
     *
     * Členění DPH na vydané faktuře.
     *
     * @return self
     */
    public function setClassificationVATIssuedInvoice(?\Pohoda\Type\ClassificationVATType $classificationVATIssuedInvoice = null)
    {
        $this->classificationVATIssuedInvoice = $classificationVATIssuedInvoice;

        return $this;
    }

    /**
     * Gets as classificationKVDPHReceivedInvoice.
     *
     * Členění KV DPH, přijaté faktury (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getClassificationKVDPHReceivedInvoice()
    {
        return $this->classificationKVDPHReceivedInvoice;
    }

    /**
     * Sets a new classificationKVDPHReceivedInvoice.
     *
     * Členění KV DPH, přijaté faktury (pouze SK verze).
     *
     * @return self
     */
    public function setClassificationKVDPHReceivedInvoice(?\Pohoda\Type\RefType $classificationKVDPHReceivedInvoice = null)
    {
        $this->classificationKVDPHReceivedInvoice = $classificationKVDPHReceivedInvoice;

        return $this;
    }

    /**
     * Gets as classificationKVDPHIssuedInvoice.
     *
     * Členění KV DPH, vydané faktury (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getClassificationKVDPHIssuedInvoice()
    {
        return $this->classificationKVDPHIssuedInvoice;
    }

    /**
     * Sets a new classificationKVDPHIssuedInvoice.
     *
     * Členění KV DPH, vydané faktury (pouze SK verze).
     *
     * @return self
     */
    public function setClassificationKVDPHIssuedInvoice(?\Pohoda\Type\RefType $classificationKVDPHIssuedInvoice = null)
    {
        $this->classificationKVDPHIssuedInvoice = $classificationKVDPHIssuedInvoice;

        return $this;
    }

    /**
     * Gets as accountForInvoicing.
     *
     * Bankovní účet nebo hotovostní pokladna, na kterou chcete nechat proplatit tuto pohledávku (používá se jen u pohledávek.) Pokud není účet uveden, POHODA použije účet uvedený v uživatelském nastavení uživatele (pod kterým je spuštěn XML import).
     *
     * @return \Pohoda\Type\AccountType
     */
    public function getAccountForInvoicing()
    {
        return $this->accountForInvoicing;
    }

    /**
     * Sets a new accountForInvoicing.
     *
     * Bankovní účet nebo hotovostní pokladna, na kterou chcete nechat proplatit tuto pohledávku (používá se jen u pohledávek.) Pokud není účet uveden, POHODA použije účet uvedený v uživatelském nastavení uživatele (pod kterým je spuštěn XML import).
     *
     * @return self
     */
    public function setAccountForInvoicing(?\Pohoda\Type\AccountType $accountForInvoicing = null)
    {
        $this->accountForInvoicing = $accountForInvoicing;

        return $this;
    }

    /**
     * Gets as responsiblePerson.
     *
     * Odpovědná osoba.
     *
     * @return \Pohoda\Type\ResponsiblePersonType
     */
    public function getResponsiblePerson()
    {
        return $this->responsiblePerson;
    }

    /**
     * Sets a new responsiblePerson.
     *
     * Odpovědná osoba.
     *
     * @return self
     */
    public function setResponsiblePerson(?\Pohoda\Type\ResponsiblePersonType $responsiblePerson = null)
    {
        $this->responsiblePerson = $responsiblePerson;

        return $this;
    }

    /**
     * Gets as toleranceMaturity.
     *
     * Počet dnů tolerované splatnosti faktur.
     *
     * @return int
     */
    public function getToleranceMaturity()
    {
        return $this->toleranceMaturity;
    }

    /**
     * Sets a new toleranceMaturity.
     *
     * Počet dnů tolerované splatnosti faktur.
     *
     * @param int $toleranceMaturity
     *
     * @return self
     */
    public function setToleranceMaturity($toleranceMaturity)
    {
        $this->toleranceMaturity = $toleranceMaturity;

        return $this;
    }

    /**
     * Gets as foreignCurrency.
     *
     * ID - odkaz na cizí měnu, IDS - kod měny.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency.
     *
     * ID - odkaz na cizí měnu, IDS - kod měny.
     *
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\Type\RefType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;

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
     * Gets as turnover.
     *
     * Obrat. Pouze pro export.
     *
     * @return float
     */
    public function getTurnover()
    {
        return $this->turnover;
    }

    /**
     * Sets a new turnover.
     *
     * Obrat. Pouze pro export.
     *
     * @param float $turnover
     *
     * @return self
     */
    public function setTurnover($turnover)
    {
        $this->turnover = $turnover;

        return $this;
    }

    /**
     * Gets as turnover2.
     *
     * Obrat 2. Pouze pro export.
     *
     * @return float
     */
    public function getTurnover2()
    {
        return $this->turnover2;
    }

    /**
     * Sets a new turnover2.
     *
     * Obrat 2. Pouze pro export.
     *
     * @param float $turnover2
     *
     * @return self
     */
    public function setTurnover2($turnover2)
    {
        $this->turnover2 = $turnover2;

        return $this;
    }

    /**
     * Adds as parameter.
     *
     * Volitelné parametry.
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
     * Volitelné parametry.
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
     * Volitelné parametry.
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
     * Volitelné parametry.
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
     * Volitelné parametry.
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

    /**
     * Gets as refAddress.
     *
     * Odkaz kontaktní osoby na hlavní adresu.
     *
     * @return \Pohoda\Type\RefAddressType
     */
    public function getRefAddress()
    {
        return $this->refAddress;
    }

    /**
     * Sets a new refAddress.
     *
     * Odkaz kontaktní osoby na hlavní adresu.
     *
     * @return self
     */
    public function setRefAddress(?\Pohoda\Type\RefAddressType $refAddress = null)
    {
        $this->refAddress = $refAddress;

        return $this;
    }

    /**
     * Gets as markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     *
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;

        return $this;
    }

    /**
     * Adds as label.
     *
     * Štítky záznamu.
     *
     * @return self
     */
    public function addToLabels(\Pohoda\Type\LabelType $label)
    {
        $this->labels[] = $label;

        return $this;
    }

    /**
     * isset labels.
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLabels($index)
    {
        return isset($this->labels[$index]);
    }

    /**
     * unset labels.
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     */
    public function unsetLabels($index): void
    {
        unset($this->labels[$index]);
    }

    /**
     * Gets as labels.
     *
     * Štítky záznamu.
     *
     * @return \Pohoda\Type\LabelType[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Sets a new labels.
     *
     * Štítky záznamu.
     *
     * @param \Pohoda\Type\LabelType[] $labels
     *
     * @return self
     */
    public function setLabels(?array $labels = null)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Gets as carrier.
     *
     * Dopravce.
     *
     * @return \Pohoda\Type\CarrierType
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Sets a new carrier.
     *
     * Dopravce.
     *
     * @return self
     */
    public function setCarrier(?\Pohoda\Type\CarrierType $carrier = null)
    {
        $this->carrier = $carrier;

        return $this;
    }
}
