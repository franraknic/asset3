<?php

namespace App\Http\Controllers;
use App\Asset;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    private $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

    public function create()
    {

        $this->validate($this->request, [
			'name' => 'required',
        ]);

        $data = $this->request->all();

		$company = Company::create($data);
		return response()->json([
			'success' => true,
			'message' => 'Company added.',
			'company' => $company
		]);
    }

	public function delete($id)
	{
		Company::findOrFail($id)->delete();
		return response()->json([
			'success' => true,
			'message' => 'Company deleted.'
		]);
    }

    public function getOne($id){
		
    }

    public function getAll()
	{
        $response = Company::all();

		return response()->json($response);
	}
    
}
