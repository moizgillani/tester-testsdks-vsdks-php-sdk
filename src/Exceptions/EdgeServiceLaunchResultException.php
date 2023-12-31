<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Exceptions;

class EdgeServiceLaunchResultException extends ApiException
{
    /**
     * @var string|null
     */
    private $codeProperty;

    /**
     * @var string|null
     */
    private $messageProperty;

    /**
     * @var string|null
     */
    private $remedyMessage;

    /**
     * Returns Code Property.
     */
    public function getCodeProperty(): ?string
    {
        return $this->codeProperty;
    }

    /**
     * Sets Code Property.
     *
     * @maps code
     */
    public function setCodeProperty(?string $codeProperty): void
    {
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Message Property.
     */
    public function getMessageProperty(): ?string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     *
     * @maps message
     */
    public function setMessageProperty(?string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }

    /**
     * Returns Remedy Message.
     */
    public function getRemedyMessage(): ?string
    {
        return $this->remedyMessage;
    }

    /**
     * Sets Remedy Message.
     *
     * @maps remedyMessage
     */
    public function setRemedyMessage(?string $remedyMessage): void
    {
        $this->remedyMessage = $remedyMessage;
    }
}
