<?php

use yii\db\Migration;

/**
 * Handles the creation of table `authors`.
 */
class m180924_045416_create_authors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
			'name' => $this->string()->notNull(),
			'surname' => $this->string()->notNull(),
            'book_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('authors');
    }
}
