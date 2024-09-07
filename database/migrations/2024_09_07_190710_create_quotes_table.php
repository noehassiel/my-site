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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();

            $table->string('slug');
            $table->string('client_id');
            $table->string('title');

            $table->date('creation_date')->nullable();
            $table->date('expiration_date')->nullable();

            $table->longText('general_vision');
            $table->longText('solutions');
            $table->longText('to_define');

            $table->string('first_stage_name');
            $table->string('first_stage_duration');
            $table->longText('first_stage_description');

            $table->string('second_stage_name');
            $table->string('second_stage_duration');
            $table->longText('second_stage_description');

            $table->string('third_stage_name');
            $table->string('third_stage_duration');
            $table->longText('third_stage_description');

            $table->string('fourth_stage_name');
            $table->string('fourth_stage_duration');
            $table->longText('fourth_stage_description');

            $table->string('estimated_time');

            $table->string('user_signature_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
