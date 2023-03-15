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
        Schema::create('work_requests', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('(UUID())'));
            $table->foreignUuid('request_type_id');
            $table->foreignUuid('work_type_id');
            $table->foreignUuid('risk_level_id');
            $table->foreignUuid('urgency_id');
//            $table->foreignUuid('level_of_impact_id');
            $table->foreignUuid('benefit_type_id')->nullable();
            $table->foreignUuid('requires_technical_assistance')->nullable();
            $table->foreignUuid('status')->nullable()->default('');
            $table->string('project_name');
            $table->string('project_charter_link')->nullable();
            $table->string('requested_by');
            $table->string('department_name');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_number');
            $table->string('technical_group_name');
            $table->string('technical_contact_name');
            $table->string('technical_contact_email');
            $table->string('technical_contact_number')->nullable();
            $table->longText('description');
            $table->longText('business_case');
            $table->longText('consequences');
            $table->longText('risk_dependency_assumption');
            $table->longText('objectives');
            $table->longText('long_term_goals');
            $table->longText('metrics_to_compare');
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
