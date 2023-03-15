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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('(UUID())'));
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name');
            $table->string('email')->unique();
            $table->uuid('role_id')->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('terms_of_service');
            $table->foreignUuid('subscription_id');
            $table->string('api_token', 80)
                ->unique()
                ->nullable()
                ->default(null);;
            $table->rememberToken();
            $table->datetimes();
        });
    }

        /**
         * Reverse the migrations.
         */
        public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
