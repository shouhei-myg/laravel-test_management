<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller {

    public function __construct() {
        $this->organization = new Organization();
    }

    // 一覧画面
    public function index() {

        $organizations = $this->organization->findAllOrganizations();

        return view('organization.index', compact('organizations'));
    }

    // 登録一覧画面
    public function create(Request $request) {

        return view('organization.create');
    }

    // 登録処理
    public function store(Request $request) {

        $registerOrganization = $this->organization->InsertOrganization($request);
        return redirect()->route('organization.index');
    }

    // 詳細一覧画面
    public function show($id) {

        $organization = Organization::find($id);

        return view('organization.show', compact('organization'));
    }
    
    // 編集画面
    public function edit($id) {
        $organization = Organization::find($id);

        return view('organization.edit', compact('organization'));
    }

    //　更新処理
    public function update(Request $request, $id) {
        $organization = Organization::find($id);
        $updateOrganization = $this->organization->updateOrganization($request, $organization);

        return redirect()->route('organization.index');
    }
    
    // 削除処理
    public function destroy($id) {
        // 指定されたIDのレコードを削除
        $deleteOrganization = $this->organization->deleteOrganizationById($id);
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('organization.index');

    }
}
