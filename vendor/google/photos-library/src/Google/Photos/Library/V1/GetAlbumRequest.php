<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to retrieve a specific album.
 *
 * Generated from protobuf message <code>google.photos.library.v1.GetAlbumRequest</code>
 */
class GetAlbumRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier of the album to be requested.
     *
     * Generated from protobuf field <code>string album_id = 1;</code>
     */
    private $album_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $album_id
     *           Identifier of the album to be requested.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier of the album to be requested.
     *
     * Generated from protobuf field <code>string album_id = 1;</code>
     * @return string
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * Identifier of the album to be requested.
     *
     * Generated from protobuf field <code>string album_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAlbumId($var)
    {
        GPBUtil::checkString($var, True);
        $this->album_id = $var;

        return $this;
    }

}
