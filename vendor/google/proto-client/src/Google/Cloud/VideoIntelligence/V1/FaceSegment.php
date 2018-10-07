<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video segment level annotation results for face detection.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.FaceSegment</code>
 */
class FaceSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * Video segment where a face was detected.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 1;</code>
     */
    private $segment = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * Video segment where a face was detected.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\VideoSegment
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Video segment where a face was detected.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\VideoSegment $var
     * @return $this
     */
    public function setSegment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\VideoSegment::class);
        $this->segment = $var;

        return $this;
    }

}

