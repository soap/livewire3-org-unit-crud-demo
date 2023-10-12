<?php

namespace App\Http\Controllers;

use App\Models\OrganizationUnit;
use Illuminate\Http\Request;

class DisplayUnitController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, OrganizationUnit $unit = null)
    {
        if (is_null($unit)) {
            $unit = OrganizationUnit::root()->first();
        }
        return view('organization-units.display', compact('unit'));
    }
}
