<?php

use yii\db\Migration;

/**
 * Class m211115_210425_Skills
 */
class m211115_210425_Skills extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Skills (ID,NOME)
        $this->createTable('SKILLS', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('SKILLS');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211115_210425_Skills cannot be reverted.\n";

        return false;
    }
    */
}
