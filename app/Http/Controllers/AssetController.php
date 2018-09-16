<?php

namespace App\Http\Controllers;
use App\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{

    private $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

    public function create()
    {

        $this->validate($this->request, [
			'qr' => 'required',
			'name' => 'required'
        ]);

        $data = $this->request->all();

		$asset = Asset::create($data);
		return response()->json([
			'success' => true,
			'message' => 'Asset added.',
			'asset' => $asset
		]);
    }

	public function delete($id)
	{
		Asset::findOrFail($id)->delete();
		return response()->json([
			'success' => true,
			'message' => 'Asset deleted.'
		]);
    }

    public function getOne($id){

    }

    public function getAll()
	{
        $response = Asset::all();

		return response()->json($response);
	}
    
}
