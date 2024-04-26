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
        Schema::create('diagnostic_results', function (Blueprint $table) {
            $table->id(column: "dr_id");
            $table->foreignId("user_id")->constrained(table: "users", column: "id")->cascadeOnDelete();
            $table->foreignId("issue_id")->constrained(table: "issues", column: "issue_id")->cascadeOnDelete();
            $table->foreignId("device_id")->constrained(table: "devices", column: "device_id")->cascadeOnDelete();
            $table->longText("diagnosis_details");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostic_results');
    }
};
