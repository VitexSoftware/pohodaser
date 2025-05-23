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

namespace Pohoda\Parameter;

/**
 * Class representing ParameterType.
 *
 * Definice volitelných parametrů formuláře a položek agendy.
 * XSD Type: parameterType
 */
class ParameterType
{
    /**
     * Verze, které jsou dostupné k tomuto dokladu. Podrobnosti k jednotlivým verzím najdete na www.stormware.cz/xml.
     */
    private ?string $version = null;

    /**
     * Agenda, ve které bude možné volitelné parametry používat a dále s nimi pracovat.
     */
    private ?string $idsAgenda = null;

    /**
     * Krátký název uživatelské agendy.
     */
    private ?string $idsUserAgenda = null;

    /**
     * ID uživatelské agendy (jen pro export).
     */
    private ?int $id = null;
    private ?\Pohoda\Parameter\UserAgendaDefType $userAgendaDef = null;

    /**
     * @var \Pohoda\Parameter\ParameterDefType[]
     */
    private ?array $formParameter = null;

    /**
     * @var \Pohoda\Parameter\ParameterDefType[]
     */
    private ?array $itemParameter = null;

    /**
     * @var \Pohoda\Parameter\FormItemListType[]
     */
    private array $userForm = [
    ];
    private ?string $userCode = null;
    private ?\Pohoda\Parameter\UserCodePartType $userCodePart = null;

    /**
     * Gets as version.
     *
     * Verze, které jsou dostupné k tomuto dokladu. Podrobnosti k jednotlivým verzím najdete na www.stormware.cz/xml
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
     * Verze, které jsou dostupné k tomuto dokladu. Podrobnosti k jednotlivým verzím najdete na www.stormware.cz/xml
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
     * Gets as idsAgenda.
     *
     * Agenda, ve které bude možné volitelné parametry používat a dále s nimi pracovat.
     *
     * @return string
     */
    public function getIdsAgenda()
    {
        return $this->idsAgenda;
    }

    /**
     * Sets a new idsAgenda.
     *
     * Agenda, ve které bude možné volitelné parametry používat a dále s nimi pracovat.
     *
     * @param string $idsAgenda
     *
     * @return self
     */
    public function setIdsAgenda($idsAgenda)
    {
        $this->idsAgenda = $idsAgenda;

        return $this;
    }

    /**
     * Gets as idsUserAgenda.
     *
     * Krátký název uživatelské agendy.
     *
     * @return string
     */
    public function getIdsUserAgenda()
    {
        return $this->idsUserAgenda;
    }

    /**
     * Sets a new idsUserAgenda.
     *
     * Krátký název uživatelské agendy.
     *
     * @param string $idsUserAgenda
     *
     * @return self
     */
    public function setIdsUserAgenda($idsUserAgenda)
    {
        $this->idsUserAgenda = $idsUserAgenda;

        return $this;
    }

    /**
     * Gets as id.
     *
     * ID uživatelské agendy (jen pro export).
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
     * ID uživatelské agendy (jen pro export).
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
     * Gets as userAgendaDef.
     *
     * @return \Pohoda\Parameter\UserAgendaDefType
     */
    public function getUserAgendaDef()
    {
        return $this->userAgendaDef;
    }

    /**
     * Sets a new userAgendaDef.
     *
     * @return self
     */
    public function setUserAgendaDef(?\Pohoda\Parameter\UserAgendaDefType $userAgendaDef = null)
    {
        $this->userAgendaDef = $userAgendaDef;

        return $this;
    }

    /**
     * Adds as parameterDef.
     *
     * @return self
     */
    public function addToFormParameter(\Pohoda\Parameter\ParameterDefType $parameterDef)
    {
        $this->formParameter[] = $parameterDef;

        return $this;
    }

    /**
     * isset formParameter.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetFormParameter($index)
    {
        return isset($this->formParameter[$index]);
    }

    /**
     * unset formParameter.
     *
     * @param int|string $index
     */
    public function unsetFormParameter($index): void
    {
        unset($this->formParameter[$index]);
    }

    /**
     * Gets as formParameter.
     *
     * @return \Pohoda\Parameter\ParameterDefType[]
     */
    public function getFormParameter()
    {
        return $this->formParameter;
    }

    /**
     * Sets a new formParameter.
     *
     * @param \Pohoda\Parameter\ParameterDefType[] $formParameter
     *
     * @return self
     */
    public function setFormParameter(?array $formParameter = null)
    {
        $this->formParameter = $formParameter;

        return $this;
    }

    /**
     * Adds as parameterDef.
     *
     * @return self
     */
    public function addToItemParameter(\Pohoda\Parameter\ParameterDefType $parameterDef)
    {
        $this->itemParameter[] = $parameterDef;

        return $this;
    }

    /**
     * isset itemParameter.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemParameter($index)
    {
        return isset($this->itemParameter[$index]);
    }

    /**
     * unset itemParameter.
     *
     * @param int|string $index
     */
    public function unsetItemParameter($index): void
    {
        unset($this->itemParameter[$index]);
    }

    /**
     * Gets as itemParameter.
     *
     * @return \Pohoda\Parameter\ParameterDefType[]
     */
    public function getItemParameter()
    {
        return $this->itemParameter;
    }

    /**
     * Sets a new itemParameter.
     *
     * @param \Pohoda\Parameter\ParameterDefType[] $itemParameter
     *
     * @return self
     */
    public function setItemParameter(?array $itemParameter = null)
    {
        $this->itemParameter = $itemParameter;

        return $this;
    }

    /**
     * Adds as userForm.
     *
     * @return self
     */
    public function addToUserForm(\Pohoda\Parameter\FormItemListType $userForm)
    {
        $this->userForm[] = $userForm;

        return $this;
    }

    /**
     * isset userForm.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetUserForm($index)
    {
        return isset($this->userForm[$index]);
    }

    /**
     * unset userForm.
     *
     * @param int|string $index
     */
    public function unsetUserForm($index): void
    {
        unset($this->userForm[$index]);
    }

    /**
     * Gets as userForm.
     *
     * @return \Pohoda\Parameter\FormItemListType[]
     */
    public function getUserForm()
    {
        return $this->userForm;
    }

    /**
     * Sets a new userForm.
     *
     * @param \Pohoda\Parameter\FormItemListType[] $userForm
     *
     * @return self
     */
    public function setUserForm(?array $userForm = null)
    {
        $this->userForm = $userForm;

        return $this;
    }

    /**
     * Gets as userCode.
     *
     * @return string
     */
    public function getUserCode()
    {
        return $this->userCode;
    }

    /**
     * Sets a new userCode.
     *
     * @param string $userCode
     *
     * @return self
     */
    public function setUserCode($userCode)
    {
        $this->userCode = $userCode;

        return $this;
    }

    /**
     * Gets as userCodePart.
     *
     * @return \Pohoda\Parameter\UserCodePartType
     */
    public function getUserCodePart()
    {
        return $this->userCodePart;
    }

    /**
     * Sets a new userCodePart.
     *
     * @return self
     */
    public function setUserCodePart(?\Pohoda\Parameter\UserCodePartType $userCodePart = null)
    {
        $this->userCodePart = $userCodePart;

        return $this;
    }
}
