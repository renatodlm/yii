<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skills".
 *
 * @property int $id
 * @property string $NOME
 *
 * @property Servicos[] $servicos
 */
class Skills extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME'], 'required', 'message' => 'Campo obrigatório.'],
            [['NOME'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NOME' => 'Nome',
        ];
    }

    /**
     * Gets query for [[Servicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicos()
    {
        return $this->hasMany(Servicos::className(), ['SKILL_ID' => 'ID']);
    }
}
