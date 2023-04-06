<?php

use yii\db\Migration;

/**
 * Class m230406_054600_change_phone_column_type
 */
class m230406_054600_change_phone_column_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('user', 'phone', 'varchar(255)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230406_054600_change_phone_column_type cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230406_054600_change_phone_column_type cannot be reverted.\n";

        return false;
    }
    */
}
