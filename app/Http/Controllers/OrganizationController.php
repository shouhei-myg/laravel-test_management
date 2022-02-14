<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller {
    public function __construct() {
        $this->organization = new Organization();
    }

    public function index() {
        $organization = Organization::all();
        var_dump(1234)
        return view('organization.index', [
            'organizations' => $organization,
        ]);
    }
}
