<?php

namespace Database\Factories;

use App\Models\LevelOfImpact;
use App\Models\RequestType;
use App\Models\RiskLevel;
use App\Models\Urgency;
use App\Models\WorkType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WorkRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $requestType = RequestType::where([])->first();
        $riskLevel = RiskLevel::where([])->first();
        $urgency = Urgency::where([])->first();
        // $levelOfImpact = LevelOfImpact::where([])->first();
        $workType = WorkType::where([])->first();
        return [
            'project_name' => fake()->company(),
            'requires_technical_assistance' => fake()->boolean(50),
            'project_charter_link'=> fake()->url(),
            'request_type_id'=> $requestType->id,
            'requested_by'=> fake()->name(),
            'department_name' => fake()->company(),
            'contact_name' => fake()->name(),
            'contact_email' => fake()->email(),
            'contact_number' => fake()->phoneNumber(),
            'technical_group_name' => fake()->company(),
            'technical_contact_name' => fake()->name(),
            'technical_contact_email' => fake()->email(),
            'description' => fake()->paragraph(6),
            'business_case' => fake()->paragraph(6),
            'consequences' => fake()->paragraph(6),
            'risk_dependency_assumption' => fake()->paragraph(6),
            'objectives' => fake()->paragraph(6),
            'long_term_goals' => fake()->paragraph(6),
            'metrics_to_compare' => fake()->paragraph(6),
            'risk_level_id' => $riskLevel->id,
            'urgency_id' => $urgency->id,
            // 'level_of_impact_id' => $levelOfImpact->id,
            'work_type_id' => $workType->id
        ];
    }
}
