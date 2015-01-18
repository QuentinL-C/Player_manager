<?php

namespace Proxies\__CG__\PM\WelcomeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Dice extends \PM\WelcomeBundle\Entity\Dice implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'id', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'diceType', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'diceResult', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'game', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'characterUsed', 'createUser', 'createDate', 'updateUser', 'updateDate', 'updateComment');
        }

        return array('__isInitialized__', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'id', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'diceType', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'diceResult', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'game', '' . "\0" . 'PM\\WelcomeBundle\\Entity\\Dice' . "\0" . 'characterUsed', 'createUser', 'createDate', 'updateUser', 'updateDate', 'updateComment');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Dice $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiceType($diceType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiceType', array($diceType));

        return parent::setDiceType($diceType);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiceType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiceType', array());

        return parent::getDiceType();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiceResult($diceResult)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiceResult', array($diceResult));

        return parent::setDiceResult($diceResult);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiceResult()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiceResult', array());

        return parent::getDiceResult();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', array($createDate));

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', array());

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', array($updateDate));

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', array());

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateComment($updateComment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateComment', array($updateComment));

        return parent::setUpdateComment($updateComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateComment', array());

        return parent::getUpdateComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setGame(\PM\GameBundle\Entity\Game $game)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGame', array($game));

        return parent::setGame($game);
    }

    /**
     * {@inheritDoc}
     */
    public function getGame()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGame', array());

        return parent::getGame();
    }

    /**
     * {@inheritDoc}
     */
    public function setCharacterUsed(\PM\CharacterBundle\Entity\CharacterUsed $characterUsed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCharacterUsed', array($characterUsed));

        return parent::setCharacterUsed($characterUsed);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharacterUsed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCharacterUsed', array());

        return parent::getCharacterUsed();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateUser(\PM\UserBundle\Entity\User $createUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateUser', array($createUser));

        return parent::setCreateUser($createUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateUser', array());

        return parent::getCreateUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateUser(\PM\UserBundle\Entity\User $updateUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateUser', array($updateUser));

        return parent::setUpdateUser($updateUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateUser', array());

        return parent::getUpdateUser();
    }

}