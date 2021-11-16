<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $LOGIN
 * @property string|null $SENHA
 * @property string $EMAIL
 * @property string|null $FOTO
 */
class Usuarios extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LOGIN', 'EMAIL', 'SENHA'], 'required', 'message' => 'Campo obrigatório.'],
            [['LOGIN', 'SENHA', 'FOTO'], 'string', 'max' => 255],
            [['EMAIL'], 'email', 'message' => 'E-mail inválido.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'LOGIN' => 'Login',
            'SENHA' => 'Senha',
            'EMAIL' => 'E-mail',
            'FOTO' => 'Foto',
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new  yii\base\UnknownPropertyException();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->ID;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        //throw new  yii\base\UnknownPropertyException();
    }

    public function validateAuthKey($authKey)
    {
        //throw new  yii\base\UnknownPropertyException();
    }

    public static function findByUsername($username)
    {
        return self::findOne(['LOGIN' => $username]);
    }

    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->SENHA);
    }


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->SENHA = Yii::$app->security->generatePasswordHash($this->SENHA);
            return true;
        } else {
            return false;
        }
    }
}
