<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/annotation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Image classification annotation definition.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.ImageClassificationAnnotation</code>
 */
class ImageClassificationAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Label of image.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     */
    protected $annotation_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $annotation_spec
     *           Label of image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Annotation::initOnce();
        parent::__construct($data);
    }

    /**
     * Label of image.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec|null
     */
    public function getAnnotationSpec()
    {
        return $this->annotation_spec;
    }

    public function hasAnnotationSpec()
    {
        return isset($this->annotation_spec);
    }

    public function clearAnnotationSpec()
    {
        unset($this->annotation_spec);
    }

    /**
     * Label of image.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $var
     * @return $this
     */
    public function setAnnotationSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec::class);
        $this->annotation_spec = $var;

        return $this;
    }

}

