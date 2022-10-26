<?php
namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
class CompanyCRUDController extends Controller
{
public function index()
{
$data['companies'] = Company::orderBy('id','desc')->paginate(5);
return view('companies.index', $data);
}

public function create()
{
return view('companies.create');
}

public function store(Request $request)
{
$request->validate([
'nama' => 'required',
'email' => 'required',
'alamat' => 'required'
]);
$company = new Company;
$company->name = $request->nama;
$company->email = $request->email;
$company->address = $request->alamat;
$company->save();
return redirect()->route('companies.index')
->with('sukses','Company has been created successfully.');
}

public function show(Company $company)
{
return view('companies.show',compact('company'));
}

public function edit(Company $company)
{
return view('companies.edit',compact('company'));
}

public function update(Request $request, $id)
{
$request->validate([
'nama' => 'required',
'email' => 'required',
'alamat' => 'required',
]);
$company = Company::find($id);
$company->nama = $request->nama;
$company->email = $request->email;
$company->alamat = $request->alamat;
$company->simpan();
return redirect()->route('companies.index')
->with('sukses','Company Has Been updated successfully');
}

public function destroy(Company $company)
{
$company->delete();
return redirect()->route('companies.index')
->with('sukses','Company has been deleted successfully');
}
}
