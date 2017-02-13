<?php

/**
 * Created by PhpStorm.
 * User: manuellaufenberg
 * Date: 13.02.17
 * Time: 14:11
 */
namespace Cnx\S3Media\Plugin\Model\Config\Source\Storage\Media;

class Storage
{
    /**
     * Add Amazon S3 to the option array
     *
     * @param $subject
     * @param $result
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     *
     * @SuppressWarnings(unused)
     */
    public function afterToOptionArray(\Magento\MediaStorage\Model\Config\Source\Storage\Media\Storage $subject, $result)
    {
        $option = array(
                'value' => \Cnx\S3Media\Model\File\Storage::STORAGE_MEDIA_S3,
                'label' => __('Amazon S3')
        );
        array_push($result, $option);

        return $result;
    }
}

