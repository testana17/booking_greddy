<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index()
    {
        $data = Packages::latest()->paginate(10);
        return view('admin.package.index',[
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('admin.package.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        Packages::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('package.index')->with('success', 'Package created successfully');
    }

    public function edit($id)
    {
        $package = Packages::findOrFail($id);
        return view('admin.package.edit', [
            'package' => $package
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $package = Packages::findOrFail($id);
        $package->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('package.index')->with('success', 'Package updated successfully');
    }

    public function destroy($id)
    {
        $package = Packages::findOrFail($id);
        $package->delete();

        return redirect()->route('package.index')->with('success', 'Package deleted successfully');
    }
}
