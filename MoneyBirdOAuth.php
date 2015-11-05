<?php

namespace emilebons\moneybird\yii2\auth;

use emilebons\moneybird\yii2\auth\widgets\AuthChoiceStyleAsset;
use Yii;
use yii\authclient\OAuth2;

class MoneyBirdOAuth extends OAuth2
{
    /**
     * @var string API base URL.
     */
    public $apiBaseUrl = 'https://moneybird.com';
    /**
     * @var string authorize URL.
     */
    public $authUrl = 'https://moneybird.com/oauth/authorize';
    /**
     * @var string token request URL endpoint.
     */
    public $tokenUrl = 'https://moneybird.com/oauth/token';

    /**
     * Generates service name.
     * @return string service name.
     */
    protected function defaultName()
    {
        return 'moneybird';
    }

    /**
     * Generates service title.
     * @return string service title.
     */
    protected function defaultTitle()
    {
        return 'MoneyBird';
    }

    /**
     * Initialize this OAuth component
     */
    public function init()
    {
        parent::init();
        $view = Yii::$app->getView();
        AuthChoiceStyleAsset::register($view);
    }

    /**
     * @return array view options in format: optionName => optionValue
     */
    public function getViewOptions()
    {
        return [
            'popupWidth' => 820,
            'popupHeight' => 410,
        ];
    }
}