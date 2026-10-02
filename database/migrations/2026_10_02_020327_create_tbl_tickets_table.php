<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_tickets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('created_by')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->dateTime('time');

            $table->foreignId('category_id')
                ->constrained('tbl_category')
                ->restrictOnDelete();

            $table->string('caller_name', 150);

            $table->foreignId('caller_type_id')
                ->constrained('tbl_caller_type')
                ->restrictOnDelete();

            $table->string('receiver_name', 150);

            $table->foreignId('type_of_receiver_id')
                ->constrained('tbl_receiver_type')
                ->restrictOnDelete();

            $table->text('address');

            $table->foreignId('concerned_hospital_id')
                ->constrained('tbl_hospitals')
                ->restrictOnDelete();

            $table->string('type_of_concern', 150);

            $table->text('remarks')->nullable();

            $table->enum('status', [
                'pending',
                'done',
                'cancelled'
            ])->default('pending');

            $table->foreignId('received_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->dateTime('received_at')->nullable();

            $table->boolean('confirmed')->default(false);

            $table->foreignId('confirmed_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tickets');
    }
};
