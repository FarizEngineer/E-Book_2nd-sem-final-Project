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
        Schema::create('enroll_comps', function (Blueprint $table) {
            $table->id();
            $table->timestamp('enrolled_at')->useCurrent();
            $table->timestamp('submitted_at')->nullable();
            $table->string('text')->nullable();
 $table->string('pdf')->nullable();
  $table->string('status')->default('not submitted');
  $table->string('prize')->default('not announced');

$table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->foreignId('competition_id')
                ->constrained('competitions')
                ->cascadeOnDelete();
            $table->timestamps();
            $table->unique(['user_id', 'competition_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enroll_comps');
    }
};
