<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projetos".
 *
 * @property int $id
 * @property string $NOME
 * @property string|null $DESCRICAO
 * @property string|null $ANO
 * @property string|null $FEATURED_IMG
 * @property int|null $SERVICO_ID
 *
 * @property Servicos $sERVICO
 */
class Projetos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projetos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME'], 'required', 'message' => 'Campo obrigatório.'],
            [['SERVICO_ID'], 'integer'],
            [['NOME','ANO', 'FEATURED_IMG'], 'string', 'max' => 255],
            [['DESCRICAO'], 'string', 'max' => 255],
            [['SERVICO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Servicos::className(), 'targetAttribute' => ['SERVICO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NOME' => 'Nome do projeto',
            'DESCRICAO' => 'Descrição do projeto',
            'ANO' => 'Ano do projeto',
            'FEATURED_IMG' => 'Imagem de destaque',
            'SERVICO_ID' => 'Serviço vinculado',
        ];
    }

    /**
     * Gets query for [[SERVICO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSERVICO()
    {
        return $this->hasOne(Servicos::className(), ['ID' => 'SERVICO_ID']);
    }
}
