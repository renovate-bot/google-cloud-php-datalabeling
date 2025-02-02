<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for LabelText.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.LabelTextRequest</code>
 */
class LabelTextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the data set to request labeling task, format:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Basic human annotation config.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $basic_config = null;
    /**
     * Required. The type of text labeling task.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelTextRequest.Feature feature = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $feature = 0;
    protected $request_config;

    /**
     * @param string                                                   $parent      Required. Name of the data set to request labeling task, format:
     *                                                                              projects/{project_id}/datasets/{dataset_id}
     *                                                                              Please see {@see DataLabelingServiceClient::datasetName()} for help formatting this field.
     * @param \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $basicConfig Required. Basic human annotation config.
     * @param int                                                      $feature     Required. The type of text labeling task.
     *                                                                              For allowed values, use constants defined on {@see \Google\Cloud\DataLabeling\V1beta1\LabelTextRequest\Feature}
     *
     * @return \Google\Cloud\DataLabeling\V1beta1\LabelTextRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $basicConfig, int $feature): self
    {
        return (new self())
            ->setParent($parent)
            ->setBasicConfig($basicConfig)
            ->setFeature($feature);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\TextClassificationConfig $text_classification_config
     *           Configuration for text classification task.
     *           One of text_classification_config and text_entity_extraction_config
     *           is required.
     *     @type \Google\Cloud\DataLabeling\V1beta1\TextEntityExtractionConfig $text_entity_extraction_config
     *           Configuration for entity extraction task.
     *           One of text_classification_config and text_entity_extraction_config
     *           is required.
     *     @type string $parent
     *           Required. Name of the data set to request labeling task, format:
     *           projects/{project_id}/datasets/{dataset_id}
     *     @type \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $basic_config
     *           Required. Basic human annotation config.
     *     @type int $feature
     *           Required. The type of text labeling task.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataLabelingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Configuration for text classification task.
     * One of text_classification_config and text_entity_extraction_config
     * is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TextClassificationConfig text_classification_config = 4;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\TextClassificationConfig|null
     */
    public function getTextClassificationConfig()
    {
        return $this->readOneof(4);
    }

    public function hasTextClassificationConfig()
    {
        return $this->hasOneof(4);
    }

    /**
     * Configuration for text classification task.
     * One of text_classification_config and text_entity_extraction_config
     * is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TextClassificationConfig text_classification_config = 4;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\TextClassificationConfig $var
     * @return $this
     */
    public function setTextClassificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\TextClassificationConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Configuration for entity extraction task.
     * One of text_classification_config and text_entity_extraction_config
     * is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TextEntityExtractionConfig text_entity_extraction_config = 5;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\TextEntityExtractionConfig|null
     */
    public function getTextEntityExtractionConfig()
    {
        return $this->readOneof(5);
    }

    public function hasTextEntityExtractionConfig()
    {
        return $this->hasOneof(5);
    }

    /**
     * Configuration for entity extraction task.
     * One of text_classification_config and text_entity_extraction_config
     * is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TextEntityExtractionConfig text_entity_extraction_config = 5;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\TextEntityExtractionConfig $var
     * @return $this
     */
    public function setTextEntityExtractionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\TextEntityExtractionConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Required. Name of the data set to request labeling task, format:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the data set to request labeling task, format:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Basic human annotation config.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig|null
     */
    public function getBasicConfig()
    {
        return $this->basic_config;
    }

    public function hasBasicConfig()
    {
        return isset($this->basic_config);
    }

    public function clearBasicConfig()
    {
        unset($this->basic_config);
    }

    /**
     * Required. Basic human annotation config.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $var
     * @return $this
     */
    public function setBasicConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig::class);
        $this->basic_config = $var;

        return $this;
    }

    /**
     * Required. The type of text labeling task.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelTextRequest.Feature feature = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Required. The type of text labeling task.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelTextRequest.Feature feature = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setFeature($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataLabeling\V1beta1\LabelTextRequest\Feature::class);
        $this->feature = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestConfig()
    {
        return $this->whichOneof("request_config");
    }

}

