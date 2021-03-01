<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $categories = Category::paginate();
        
        return view('categories.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function show(Category $category)
    {
        return view('categories.show', [
            'category' => $category,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect(route('categories.index'))
            ->with('status', 'Registrada correctamente.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.index'))
            ->with('status', 'Eliminada correctamente.');
    }
}
