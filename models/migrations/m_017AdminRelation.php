<?php

use app\cores\Blueprint;
use app\cores\Schema;
use app\models\BaseMigration;


class m_017AdminRelation implements BaseMigration
{
    public function up(): array
    {
        return Schema::alterTable("admin", function (Blueprint $table) {
            $table->alterAddForeignKey("nip", "user", "no_induk", "fk_nip_admin");
        });
    }

    public function down(): array
    {
      return Schema::alterTable("admin", function (Blueprint $table) {
          $table->alterDropConstraint("FK_nip");
      });
    }
}