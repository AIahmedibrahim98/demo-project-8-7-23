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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('int');
            $table->bigInteger('big_int');

            $table->decimal('price', 10, 2);
            $table->float('float');

            $table->date('date');
            $table->dateTime('due_date');
            $table->year('year');

            $table->string('name', 250);
            $table->char('mobile', 20);
            $table->text('text');
            $table->longText('long_text');
            $table->tinyText('tinyText');
            $table->mediumText('mediumText');

            $table->enum('role', ['admin', 'user', 'instractor', 'student']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
