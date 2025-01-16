<?php

// database/migrations/xxxx_xx_xx_create_bills_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('total_money', 10, 2);
            $table->date('date_pay');
            $table->time('time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
