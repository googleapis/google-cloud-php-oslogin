<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace Google\Cloud\OsLogin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for creating an SSH public key.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1.CreateSshPublicKeyRequest</code>
 */
class CreateSshPublicKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique ID for the user in format `users/{user}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The SSH public key and expiration time.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.common.SshPublicKey ssh_public_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ssh_public_key = null;

    /**
     * @param string                                    $parent       Required. The unique ID for the user in format `users/{user}`. Please see
     *                                                                {@see OsLoginServiceClient::userName()} for help formatting this field.
     * @param \Google\Cloud\OsLogin\Common\SshPublicKey $sshPublicKey Required. The SSH public key and expiration time.
     *
     * @return \Google\Cloud\OsLogin\V1\CreateSshPublicKeyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\OsLogin\Common\SshPublicKey $sshPublicKey): self
    {
        return (new self())
            ->setParent($parent)
            ->setSshPublicKey($sshPublicKey);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The unique ID for the user in format `users/{user}`.
     *     @type \Google\Cloud\OsLogin\Common\SshPublicKey $ssh_public_key
     *           Required. The SSH public key and expiration time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique ID for the user in format `users/{user}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The unique ID for the user in format `users/{user}`.
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
     * Required. The SSH public key and expiration time.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.common.SshPublicKey ssh_public_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OsLogin\Common\SshPublicKey|null
     */
    public function getSshPublicKey()
    {
        return $this->ssh_public_key;
    }

    public function hasSshPublicKey()
    {
        return isset($this->ssh_public_key);
    }

    public function clearSshPublicKey()
    {
        unset($this->ssh_public_key);
    }

    /**
     * Required. The SSH public key and expiration time.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.common.SshPublicKey ssh_public_key = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OsLogin\Common\SshPublicKey $var
     * @return $this
     */
    public function setSshPublicKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsLogin\Common\SshPublicKey::class);
        $this->ssh_public_key = $var;

        return $this;
    }

}

