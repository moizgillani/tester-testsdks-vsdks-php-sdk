<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class UsageTriggerAddRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $triggerName;

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $serviceName;

    /**
     * @var string
     */
    private $thresholdValue;

    /**
     * @var bool|null
     */
    private $allowExcess;

    /**
     * @var bool|null
     */
    private $sendSmsNotification;

    /**
     * @var string|null
     */
    private $smsPhoneNumbers;

    /**
     * @var bool|null
     */
    private $sendEmailNotification;

    /**
     * @var string|null
     */
    private $emailAddresses;

    /**
     * @param string $accountName
     * @param string $serviceName
     * @param string $thresholdValue
     */
    public function __construct(string $accountName, string $serviceName, string $thresholdValue)
    {
        $this->accountName = $accountName;
        $this->serviceName = $serviceName;
        $this->thresholdValue = $thresholdValue;
    }

    /**
     * Returns Trigger Name.
     * Usage trigger name
     */
    public function getTriggerName(): ?string
    {
        return $this->triggerName;
    }

    /**
     * Sets Trigger Name.
     * Usage trigger name
     *
     * @maps triggerName
     */
    public function setTriggerName(?string $triggerName): void
    {
        $this->triggerName = $triggerName;
    }

    /**
     * Returns Account Name.
     * Account name
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Account name
     *
     * @required
     * @maps accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Service Name.
     * Service name
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * Sets Service Name.
     * Service name
     *
     * @required
     * @maps serviceName
     * @factory \VerizonLib\Models\ServiceNameEnum::checkValue
     */
    public function setServiceName(string $serviceName): void
    {
        $this->serviceName = $serviceName;
    }

    /**
     * Returns Threshold Value.
     * The percent of subscribed usage required to activate the trigger, such as 90 or 100.
     */
    public function getThresholdValue(): string
    {
        return $this->thresholdValue;
    }

    /**
     * Sets Threshold Value.
     * The percent of subscribed usage required to activate the trigger, such as 90 or 100.
     *
     * @required
     * @maps thresholdValue
     */
    public function setThresholdValue(string $thresholdValue): void
    {
        $this->thresholdValue = $thresholdValue;
    }

    /**
     * Returns Allow Excess.
     * Allow additional requests after thresholdValue is reached. (currently not functional)
     */
    public function getAllowExcess(): ?bool
    {
        return $this->allowExcess;
    }

    /**
     * Sets Allow Excess.
     * Allow additional requests after thresholdValue is reached. (currently not functional)
     *
     * @maps allowExcess
     */
    public function setAllowExcess(?bool $allowExcess): void
    {
        $this->allowExcess = $allowExcess;
    }

    /**
     * Returns Send Sms Notification.
     * Send SMS (text) alerts when the thresholdValue is reached.
     */
    public function getSendSmsNotification(): ?bool
    {
        return $this->sendSmsNotification;
    }

    /**
     * Sets Send Sms Notification.
     * Send SMS (text) alerts when the thresholdValue is reached.
     *
     * @maps sendSmsNotification
     */
    public function setSendSmsNotification(?bool $sendSmsNotification): void
    {
        $this->sendSmsNotification = $sendSmsNotification;
    }

    /**
     * Returns Sms Phone Numbers.
     * Comma-separated list of phone numbers to send SMS alerts to. Digits only; no dashes or parentheses,
     * etc.
     */
    public function getSmsPhoneNumbers(): ?string
    {
        return $this->smsPhoneNumbers;
    }

    /**
     * Sets Sms Phone Numbers.
     * Comma-separated list of phone numbers to send SMS alerts to. Digits only; no dashes or parentheses,
     * etc.
     *
     * @maps smsPhoneNumbers
     */
    public function setSmsPhoneNumbers(?string $smsPhoneNumbers): void
    {
        $this->smsPhoneNumbers = $smsPhoneNumbers;
    }

    /**
     * Returns Send Email Notification.
     * Send email alerts when the thresholdValue is reached.
     */
    public function getSendEmailNotification(): ?bool
    {
        return $this->sendEmailNotification;
    }

    /**
     * Sets Send Email Notification.
     * Send email alerts when the thresholdValue is reached.
     *
     * @maps sendEmailNotification
     */
    public function setSendEmailNotification(?bool $sendEmailNotification): void
    {
        $this->sendEmailNotification = $sendEmailNotification;
    }

    /**
     * Returns Email Addresses.
     * Comma-separated list of email addresses to send alerts to.
     */
    public function getEmailAddresses(): ?string
    {
        return $this->emailAddresses;
    }

    /**
     * Sets Email Addresses.
     * Comma-separated list of email addresses to send alerts to.
     *
     * @maps emailAddresses
     */
    public function setEmailAddresses(?string $emailAddresses): void
    {
        $this->emailAddresses = $emailAddresses;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->triggerName)) {
            $json['triggerName']           = $this->triggerName;
        }
        $json['accountName']               = $this->accountName;
        $json['serviceName']               = ServiceNameEnum::checkValue($this->serviceName);
        $json['thresholdValue']            = $this->thresholdValue;
        if (isset($this->allowExcess)) {
            $json['allowExcess']           = $this->allowExcess;
        }
        if (isset($this->sendSmsNotification)) {
            $json['sendSmsNotification']   = $this->sendSmsNotification;
        }
        if (isset($this->smsPhoneNumbers)) {
            $json['smsPhoneNumbers']       = $this->smsPhoneNumbers;
        }
        if (isset($this->sendEmailNotification)) {
            $json['sendEmailNotification'] = $this->sendEmailNotification;
        }
        if (isset($this->emailAddresses)) {
            $json['emailAddresses']        = $this->emailAddresses;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
