<?php

use Phinx\Migration\AbstractMigration;

class OperatingExpenseMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $config = $this->table('operating_expenses');
        $config->addColumn('operating_expense', 'string', array('limit' => 45))
            ->addColumn('active', 'integer', array('default'=>0))
            ->addColumn('created_at', 'timestamp', array())
            ->addColumn('updated_at', 'timestamp', array())
            ->save();
    }
}
