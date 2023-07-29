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
        Schema::table('tasks', function (Blueprint $table) {
            /* $table->string('description', 5000);
            $table->string('comment', 5000); */
            $table->text('name')->default('new_task')->change();
            $table->renameColumn('price', 'total');
            $table->after('name', function (Blueprint $table) {
                $table->string('description', 5000)->nullable();
                $table->string('comment', 5000);
                $table->string('email')->unique();

                // $table->unsignedBigInteger('user_id')->nullable();
                // $table->foreign('user_id')->references('id')->on('users');
                // $table->foreignId('user_id')->constrained();
                $table->foreignId('user_id')->constrained('users');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            // $table->dropColumn('description');
            // $table->dropColumn('comment');
            $table->dropColumn('description', 'comment', 'email');
            $table->dropConstrainedForeignId('user_id');
            $table->string('name', 250)->default('')->change();
            $table->renameColumn('total', 'price');
        });
    }
};
