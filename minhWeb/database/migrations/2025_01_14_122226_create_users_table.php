<?php   
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Tạo cột id tự tăng
            $table->string('user_name'); // Cột user_name kiểu string
            $table->string('password'); // Cột user_name kiểu string
            $table->enum('position', ['staff', 'admin', 'manager']); // Cột position với giá trị cố định
            $table->timestamps(); // Tạo cột created_at và updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users'); // Xóa bảng nếu rollback
    }
}
