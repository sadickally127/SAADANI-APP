<?php

use App\Models\Employer;
use Database\Factories\EmployerFactory;
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
            //foreig id or key called Employer
            // $table->unsignedBigInteger('employer_id'); (or you can use:)
            $table->foreignIdFor(Employer::class);
            $table->string('Title');
            $table->string('Salary');
            $table->string('Location');
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
