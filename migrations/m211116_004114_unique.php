<?php

use yii\db\Migration;

/**
 * Class m211116_004114_unique
 */
class m211116_004114_unique extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('USUARIOS', 'LOGIN', 'string unique');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('USUARIOS', 'LOGIN', 'string');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211116_004114_unique cannot be reverted.\n";

        return false;
    }
    */
}
