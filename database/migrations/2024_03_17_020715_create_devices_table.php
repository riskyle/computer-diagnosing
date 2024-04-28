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
        Schema::create('devices', function (Blueprint $table) {
            $table->id(column: "device_id");
            $table->foreignId("user_id")->constrained(table: "users", column: "id")->cascadeOnDelete();
            $table->string("brand");
            $table->longText("symptoms");
            $table->longText("hardware_issues");
            $table->date("resolved_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
