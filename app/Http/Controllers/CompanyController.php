<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyController extends Controller {
	public function index() {
		$companies = Company::all();

		return view('companies', compact('companies'));
	}

	public function create() {
		return view('add_company');
	}

   
	public function store(Request $request) {
		$request->validate([
			'company_name' => 'required|min:4',
			'address' => 'required',
		]);
		/* request data valid */
		
		$company = new Company();
		$company->name = request('company_name');
		$company->address = request('address');
		$company->save();

		return redirect('/');
	}
   
	public function add_employee(Request $request) {
		$request->validate([
			'id' => 'required',
			'name' => 'required'
		]);

		/* request data valid */
		$company = Company::find(request('id'));
		$empoyee = new Employee();
		$empoyee->name = request('name');

		$company ->employees() ->save($empoyee);

		return redirect()->back();
	}

	public function show(Company $company) {
		return view('company_detail', compact('company'));
	}

	
	public function edit(Company $company) {
		//show form to edit the post
	}

	
	public function update(Request $request, Company $company) {
		//save the edited post
	}

	
	public function destroy(Company $company) {
		//delete a post
	}
}
