<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicos".
 *
 * @property int $id
 * @property string $NOME
 * @property string|null $DESCRICAO
 * @property string|null $FEATURED_IMG
 * @property int|null $SKILL_ID
 *
 * @property Projetos[] $projetos
 * @property Skills $sKILL
 */
class Servicos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME'], 'required', 'message' => 'Campo obrigatório.'],
            [['SKILL_ID'], 'integer'],
            [['NOME', 'DESCRICAO', 'FEATURED_IMG'], 'string', 'max' => 255],
            [['SKILL_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Skills::className(), 'targetAttribute' => ['SKILL_ID' => 'ID']],
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
            'DESCRICAO' => 'Descricao',
            'FEATURED_IMG' => 'Featured  Img',
            'SKILL_ID' => 'Skill  ID',
        ];
    }

    /**
     * Gets query for [[Projetos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjetos()
    {
        return $this->hasMany(Projetos::className(), ['SERVICO_ID' => 'ID']);
    }

    /**
     * Gets query for [[SKILL]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSKILL()
    {
        return $this->hasOne(Skills::className(), ['ID' => 'SKILL_ID']);
    }
}
