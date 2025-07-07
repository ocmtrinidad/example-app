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
        // Creates the ninjas table
        Schema::create('ninjas', function (Blueprint $table) {
            $table->id();
            // Creates the created_at and updated_at columns
            $table->timestamps();
            $table->string("name");
            $table->integer("skill");
            $table->text("bio");
            // foreignId() creates a foreign key called dojo_id.
            // constrained() ensures that the dojo_id must exist in the dojos table.
            // onDelete('cascade') ensures that if a Dojo is deleted, all associated Ninjas are also deleted.
            $table->foreignId("dojo_id")->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ninjas');
    }
};
