<?php

// database/migrations/xxxx_xx_xx_create_tables_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('table_number');
            $table->enum('status', ['Available', 'Occupied', 'Booked', 'Broken']);
            $table->decimal('price', 10, 2);
            $table->string('area');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
