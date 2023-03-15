<?php

namespace Database\Seeders;

use App\Models\BenefitType;
use App\Models\WorkRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkRequestBenefitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workRequest = WorkRequest::where([])->get();
        $benefitType = BenefitType::where([])->first();
        foreach($workRequest as $workReq) {
            DB::table('work_request_benefit_type')->insert([
                'work_request_id' => $workReq->id,
                'benefit_type_id' => $benefitType->id,
            ]);
        }
    }
}
