<?php

namespace App\Http\Controllers;

use App\Models\PersonalityGroup;
use Illuminate\Http\Request;

class FinishQuizController extends Controller
{
    public function index(Request $request) {
        $answers =  $request->answers;

        $countAnswersGroup = array_count_values(array_column($answers, 'personality_group_id'));

        // Count the occurrences of personality_group
        $personalityGroupCount = max($countAnswersGroup);

        // Get the personality group id
        $personalityGroupId = array_search($personalityGroupCount, $countAnswersGroup);

        // Get personality group data
        $personalityGroupName = PersonalityGroup::find($personalityGroupId);

        return response()->json([
            'personality_group_message' => $personalityGroupName->message,
            'personality_group_name' => $personalityGroupName->name,
        ], 200);
    }
}
