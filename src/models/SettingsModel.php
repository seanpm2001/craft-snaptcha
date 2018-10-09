<?php
/**
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\snaptcha\models;

use craft\base\Model;

/**
 * Settings Model
 */
class SettingsModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var bool
     */
    public $validationEnabled = false;

    /**
     * @var bool
     */
    public $oneTimeKey = true;

    /**
     * @var bool
     */
    public $logRejected = true;

    /**
     * @var string
     */
    public $fieldName = 'snaptcha';

    /**
     * @var string
     */
    public $errorMessage = 'Sorry, you have failed the security test. Please ensure that you have javascript enabled and that you refresh the page that you are trying to submit.';

    /**
     * @var int
     */
    public $expirationTime = 60;

    /**
     * @var int
     */
    public $minimumSubmitTime = 3;

    /**
     * @var array
     */
    public $excludedUriPatterns = [];

    /**
     * @var array
     */
    public $blacklist = [];

    // Public Methods
    // =========================================================================

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            [['fieldName', 'expirationTime', 'minimumSubmitTime', 'errorMessage'], 'required'],
            [['validationEnabled', 'oneTimeKey', 'logRejected'], 'boolean'],
            [['fieldName', 'errorMessage'], 'string'],
            [['expirationTime', 'minimumSubmitTime'], 'integer'],
        ];
    }
}
