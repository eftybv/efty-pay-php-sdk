<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/payments/mangopay/onboarding.proto

namespace Eftypay\Payments\Mangopay;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KycDocument contains details about a Mangopay KYC document.
 * This object is set by Efty Pay and is readonly.
 *
 * Generated from protobuf message <code>eftypay.payments.mangopay.KycDocument</code>
 */
class KycDocument extends \Google\Protobuf\Internal\Message
{
    /**
     * mangopayDocumentId contains the Mangopay document ID.
     *
     * Generated from protobuf field <code>string mangopayDocumentId = 1;</code>
     */
    protected $mangopayDocumentId = '';
    /**
     * documentType contains the Mangopay required document Type.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.KycDocumentType documentType = 2;</code>
     */
    protected $documentType = 0;
    /**
     * status contains the Mangopay document status and can be; CREATED, VALIDATION_ASKED, VALIDATED, REFUSED, OUT_OF_DATE.
     *
     * Generated from protobuf field <code>string status = 3;</code>
     */
    protected $status = '';
    /**
     * mangopayFlags contains one or several codes which give more information about the identity proof document refusal. See the Flags list for more information for each flag meaning: https://mangopay.com/docs/concepts/users/verification/document-process#flags-list
     *
     * Generated from protobuf field <code>repeated string mangopayFlags = 4;</code>
     */
    private $mangopayFlags;
    /**
     * RefusedReasonType is only set if STATUS = REFUSED and contains the refused reason type from Mangopay in case a KYC document was refused, full list: https://mangopay.com/docs/concepts/users/verification/document-process#refused-reason-types-list
     *
     * Generated from protobuf field <code>string refusedReasonType = 5;</code>
     */
    protected $refusedReasonType = '';
    /**
     * refusedReasonMessage is only set if STATUS = REFUSED and contains the refused reason message from Mangopay with further details about why the document was refused.
     *
     * Generated from protobuf field <code>string refusedReasonMessage = 6;</code>
     */
    protected $refusedReasonMessage = '';
    /**
     * isSubmitted indicates if the document has been submitted to Mangopay for review.
     *
     * Generated from protobuf field <code>bool isSubmitted = 7;</code>
     */
    protected $isSubmitted = false;
    /**
     * created is the created date of the document.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 8;</code>
     */
    protected $created = null;
    /**
     * created is the updated date of the document.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 9;</code>
     */
    protected $updated = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mangopayDocumentId
     *           mangopayDocumentId contains the Mangopay document ID.
     *     @type int $documentType
     *           documentType contains the Mangopay required document Type.
     *     @type string $status
     *           status contains the Mangopay document status and can be; CREATED, VALIDATION_ASKED, VALIDATED, REFUSED, OUT_OF_DATE.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $mangopayFlags
     *           mangopayFlags contains one or several codes which give more information about the identity proof document refusal. See the Flags list for more information for each flag meaning: https://mangopay.com/docs/concepts/users/verification/document-process#flags-list
     *     @type string $refusedReasonType
     *           RefusedReasonType is only set if STATUS = REFUSED and contains the refused reason type from Mangopay in case a KYC document was refused, full list: https://mangopay.com/docs/concepts/users/verification/document-process#refused-reason-types-list
     *     @type string $refusedReasonMessage
     *           refusedReasonMessage is only set if STATUS = REFUSED and contains the refused reason message from Mangopay with further details about why the document was refused.
     *     @type bool $isSubmitted
     *           isSubmitted indicates if the document has been submitted to Mangopay for review.
     *     @type \Google\Protobuf\Timestamp $created
     *           created is the created date of the document.
     *     @type \Google\Protobuf\Timestamp $updated
     *           created is the updated date of the document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Payments\Mangopay\Onboarding::initOnce();
        parent::__construct($data);
    }

    /**
     * mangopayDocumentId contains the Mangopay document ID.
     *
     * Generated from protobuf field <code>string mangopayDocumentId = 1;</code>
     * @return string
     */
    public function getMangopayDocumentId()
    {
        return $this->mangopayDocumentId;
    }

    /**
     * mangopayDocumentId contains the Mangopay document ID.
     *
     * Generated from protobuf field <code>string mangopayDocumentId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMangopayDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->mangopayDocumentId = $var;

        return $this;
    }

    /**
     * documentType contains the Mangopay required document Type.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.KycDocumentType documentType = 2;</code>
     * @return int
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * documentType contains the Mangopay required document Type.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.KycDocumentType documentType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDocumentType($var)
    {
        GPBUtil::checkEnum($var, \Eftypay\Payments\Mangopay\KycDocumentType::class);
        $this->documentType = $var;

        return $this;
    }

    /**
     * status contains the Mangopay document status and can be; CREATED, VALIDATION_ASKED, VALIDATED, REFUSED, OUT_OF_DATE.
     *
     * Generated from protobuf field <code>string status = 3;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * status contains the Mangopay document status and can be; CREATED, VALIDATION_ASKED, VALIDATED, REFUSED, OUT_OF_DATE.
     *
     * Generated from protobuf field <code>string status = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * mangopayFlags contains one or several codes which give more information about the identity proof document refusal. See the Flags list for more information for each flag meaning: https://mangopay.com/docs/concepts/users/verification/document-process#flags-list
     *
     * Generated from protobuf field <code>repeated string mangopayFlags = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMangopayFlags()
    {
        return $this->mangopayFlags;
    }

    /**
     * mangopayFlags contains one or several codes which give more information about the identity proof document refusal. See the Flags list for more information for each flag meaning: https://mangopay.com/docs/concepts/users/verification/document-process#flags-list
     *
     * Generated from protobuf field <code>repeated string mangopayFlags = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMangopayFlags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->mangopayFlags = $arr;

        return $this;
    }

    /**
     * RefusedReasonType is only set if STATUS = REFUSED and contains the refused reason type from Mangopay in case a KYC document was refused, full list: https://mangopay.com/docs/concepts/users/verification/document-process#refused-reason-types-list
     *
     * Generated from protobuf field <code>string refusedReasonType = 5;</code>
     * @return string
     */
    public function getRefusedReasonType()
    {
        return $this->refusedReasonType;
    }

    /**
     * RefusedReasonType is only set if STATUS = REFUSED and contains the refused reason type from Mangopay in case a KYC document was refused, full list: https://mangopay.com/docs/concepts/users/verification/document-process#refused-reason-types-list
     *
     * Generated from protobuf field <code>string refusedReasonType = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRefusedReasonType($var)
    {
        GPBUtil::checkString($var, True);
        $this->refusedReasonType = $var;

        return $this;
    }

    /**
     * refusedReasonMessage is only set if STATUS = REFUSED and contains the refused reason message from Mangopay with further details about why the document was refused.
     *
     * Generated from protobuf field <code>string refusedReasonMessage = 6;</code>
     * @return string
     */
    public function getRefusedReasonMessage()
    {
        return $this->refusedReasonMessage;
    }

    /**
     * refusedReasonMessage is only set if STATUS = REFUSED and contains the refused reason message from Mangopay with further details about why the document was refused.
     *
     * Generated from protobuf field <code>string refusedReasonMessage = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRefusedReasonMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->refusedReasonMessage = $var;

        return $this;
    }

    /**
     * isSubmitted indicates if the document has been submitted to Mangopay for review.
     *
     * Generated from protobuf field <code>bool isSubmitted = 7;</code>
     * @return bool
     */
    public function getIsSubmitted()
    {
        return $this->isSubmitted;
    }

    /**
     * isSubmitted indicates if the document has been submitted to Mangopay for review.
     *
     * Generated from protobuf field <code>bool isSubmitted = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSubmitted($var)
    {
        GPBUtil::checkBool($var);
        $this->isSubmitted = $var;

        return $this;
    }

    /**
     * created is the created date of the document.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreated()
    {
        return $this->created;
    }

    public function hasCreated()
    {
        return isset($this->created);
    }

    public function clearCreated()
    {
        unset($this->created);
    }

    /**
     * created is the created date of the document.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created = $var;

        return $this;
    }

    /**
     * created is the updated date of the document.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    public function hasUpdated()
    {
        return isset($this->updated);
    }

    public function clearUpdated()
    {
        unset($this->updated);
    }

    /**
     * created is the updated date of the document.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated = $var;

        return $this;
    }

}
