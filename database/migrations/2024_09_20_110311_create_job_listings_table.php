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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();

            // Set the user_id as a foreign key
            $table->foreignIdFor(\App\Models\User::class)
                ->constrained() // Ensures that it references the 'id' column on the 'users' table
                ->onDelete('cascade'); // Optional: adjust this behavior as needed

            $table->string('title');
            $table->decimal('salary', 10, 2); // Change salary to decimal for monetary values
            $table->unsignedBigInteger('employer_id')->nullable(); // Adjust if necessary

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
