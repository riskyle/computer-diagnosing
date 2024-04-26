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
        Schema::create('issues', function (Blueprint $table) {
            $table->id(column: "issue_id");
            $table->foreignId(column: "device_id")->constrained(table: "devices", column: "device_id")->cascadeOnDelete();
            $table->string("ans_one")->nullable();
            $table->string("ans_two")->nullable();
            $table->string("ans_three")->nullable();
            $table->string("ans_four")->nullable();
            $table->string("ans_five")->nullable();
            $table->boolean("status");
            $table->date("resolved_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
