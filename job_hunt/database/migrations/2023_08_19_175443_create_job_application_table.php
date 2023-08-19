<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('position');
            $table->string('company_name');
            $table->string('city');
            $table->string('country');
            $table->enum('channel', ['linkedin', 'bestjobs', 'ebjobs', 'company_website', 'other'])->default('linkedin');
            $table->date('applied_on');
            $table->enum('status', ['applied', 'interviewed', 'rejected', 'hired'])->default('applied');
            $table->text('notes')->nullable();
            $table->string('recruiter_name')->nullable();
            $table->enum('experience_level', ['interview', 'junior', 'mid', 'senior'])->default('senior');
            $table->string('contact_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_application');
    }
};
