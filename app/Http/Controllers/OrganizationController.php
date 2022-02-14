<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller {
    public function __construct() {
        $this->organizations = new Organization();
    }

    public function index() {
        $organizations = Organization::all();
        return view('organization.index', [
            'organizations' => $organizations,
        ]);
    }
}
