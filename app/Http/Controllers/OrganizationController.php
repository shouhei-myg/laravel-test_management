<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller {

    public function __construct() {
        $this->organization = new Organization();
    }
    // 一案画面
    public function index() {

        $organizations = $this->organization->findAllOrganizations();

        return view('organization.index', compact('organizations'));
    }
    // 登録画面
    public function create(Request $request) {

        return view('organization.create');
    }
    // 登録処理
    public function store(Request $request) {

        $registerOrganization = $this->organization->InsertOrganization($request);
        return redirect()->route('organization.index');
    }
}
