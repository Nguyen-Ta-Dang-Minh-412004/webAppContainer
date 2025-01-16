<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTimesTable extends Migration
{
    public function up(): void
    {
        Schema::create('table_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Khóa ngoại liên kết với bảng users
            $table->dateTime('time'); // Thời gian
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('table_times');
    }
}
