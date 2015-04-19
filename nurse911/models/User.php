<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     * returns the table name
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     * validation rules
     */
    public function rules()
    {
        return [
            [['username', 'password', 'firstName', 'lastName', 'email', 'auth_key'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     * converts labels into human readable strings
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'email' => 'Email',
        ];
    }

    /**
    * finds a specific user by username
    */
    public static function findByUsername($username)
    {
        $user = User::find()->where(['username' => $username])->one();

        return $user;
    }

    /**
    * finds a specific user by id
    */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
    * finds a user by access token
    * I'm not using this, but it's required for IdentityInterface to work
    */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
    * gets a users id
    */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
    * gets a users authKey
    * I'm not using this, but IdentityInterface needs it
    */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
    * validates a users authKey
    * I'm not using this, but IdentityInterface needs it
    */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
    * validates a users password
    * I'm not using this, but IdentityInterface needs it
    */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
    * changes a users password
    * I'm not using this, but IdentityInterface needs it
    */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
    * creates a users authKey
    * I'm not using this, but IdentityInterface needs it
    */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
    * creates a users password reset token
    * I'm not using this, but IdentityInterface needs it
    */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
    * removes a users password reset token
    * I'm not using this, but IdentityInterface needs it
    */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
