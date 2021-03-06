<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib\Voice\Models;

/**
 * @todo Write general description for this model
 */
class RecordingMetadataResponse implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * @todo Write general description for this property
     * @var string|null $callId public property
     */
    public $callId;

    /**
     * @todo Write general description for this property
     * @var string|null $recordingId public property
     */
    public $recordingId;

    /**
     * @todo Write general description for this property
     * @var string|null $to public property
     */
    public $to;

    /**
     * @todo Write general description for this property
     * @var string|null $from public property
     */
    public $from;

    /**
     * @todo Write general description for this property
     * @var string|null $duration public property
     */
    public $duration;

    /**
     * @todo Write general description for this property
     * @var mixed|null $direction public property
     */
    public $direction;

    /**
     * @todo Write general description for this property
     * @var integer|null $channels public property
     */
    public $channels;

    /**
     * @todo Write general description for this property
     * @var integer|null $startTime public property
     */
    public $startTime;

    /**
     * @todo Write general description for this property
     * @var integer|null $endTime public property
     */
    public $endTime;

    /**
     * @todo Write general description for this property
     * @var mixed|null $fileFormat public property
     */
    public $fileFormat;

    /**
     * @todo Write general description for this property
     * @var mixed|null $transcriptionStatus public property
     */
    public $transcriptionStatus;

    /**
     * @todo Write general description for this property
     * @var string|null $mediaUrl public property
     */
    public $mediaUrl;

    /**
     * @todo Write general description for this property
     * @var string|null $transcriptionUrl public property
     */
    public $transcriptionUrl;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->accountId           = func_get_arg(0);
            $this->callId              = func_get_arg(1);
            $this->recordingId         = func_get_arg(2);
            $this->to                  = func_get_arg(3);
            $this->from                = func_get_arg(4);
            $this->duration            = func_get_arg(5);
            $this->direction           = func_get_arg(6);
            $this->channels            = func_get_arg(7);
            $this->startTime           = func_get_arg(8);
            $this->endTime             = func_get_arg(9);
            $this->fileFormat          = func_get_arg(10);
            $this->transcriptionStatus = func_get_arg(11);
            $this->mediaUrl            = func_get_arg(12);
            $this->transcriptionUrl    = func_get_arg(13);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accountId']           = $this->accountId;
        $json['callId']              = $this->callId;
        $json['recordingId']         = $this->recordingId;
        $json['to']                  = $this->to;
        $json['from']                = $this->from;
        $json['duration']            = $this->duration;
        $json['direction']           = $this->direction;
        $json['channels']            = $this->channels;
        $json['startTime']           = $this->startTime;
        $json['endTime']             = $this->endTime;
        $json['fileFormat']          = $this->fileFormat;
        $json['transcriptionStatus'] = $this->transcriptionStatus;
        $json['mediaUrl']            = $this->mediaUrl;
        $json['transcriptionUrl']    = $this->transcriptionUrl;

        return array_filter($json);
    }
}
