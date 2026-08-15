<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|in:kesehatan,terapi,skincare,buku,travel,properti,wo',
            'description' => 'required|string',
            'price' => 'required|string|max:255',
            'badge' => 'nullable|string|max:100',
            'rating' => 'required|numeric|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|string|max:100',
            'has_detail' => 'sometimes|boolean',
            'detail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp_url' => 'nullable|string|max:1000',
        ]);

        $data = $validated;
        $data['has_detail'] = $request->has('has_detail');

        // Handle Main Image Upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_prod_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $data['image'] = 'images/' . $fileName;
            $data['icon'] = null; // Clear icon if image is uploaded
        }

        // Handle Detail Image Upload (Brochure)
        if ($request->hasFile('detail_image')) {
            $file = $request->file('detail_image');
            $fileName = time() . '_detail_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $data['detail_image'] = 'images/' . $fileName;
            $data['has_detail'] = true;
        }

        // Auto-generate WhatsApp URL if empty
        if (empty($data['whatsapp_url'])) {
            $phoneNumber = '6285954572652';
            $message = 'Halo CV. Srikandi Keris Barokah, saya tertarik dengan info ' . $data['name'];
            $data['whatsapp_url'] = 'https://wa.me/' . $phoneNumber . '?text=' . rawurlencode($message);
        }

        Product::create($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|in:kesehatan,terapi,skincare,buku,travel,properti,wo',
            'description' => 'required|string',
            'price' => 'required|string|max:255',
            'badge' => 'nullable|string|max:100',
            'rating' => 'required|numeric|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|string|max:100',
            'has_detail' => 'sometimes|boolean',
            'detail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp_url' => 'nullable|string|max:1000',
        ]);

        $data = $validated;
        $data['has_detail'] = $request->has('has_detail');

        // Handle Main Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && File::exists(public_path($product->image))) {
                File::delete(public_path($product->image));
            }

            $file = $request->file('image');
            $fileName = time() . '_prod_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $data['image'] = 'images/' . $fileName;
            $data['icon'] = null; // Clear icon if image uploaded
        } elseif ($request->filled('icon')) {
            // If icon is provided, remove old image
            if ($product->image && File::exists(public_path($product->image))) {
                File::delete(public_path($product->image));
            }
            $data['image'] = null;
        }

        // Handle Detail Image Upload
        if ($request->hasFile('detail_image')) {
            // Delete old detail image if exists
            if ($product->detail_image && File::exists(public_path($product->detail_image))) {
                File::delete(public_path($product->detail_image));
            }

            $file = $request->file('detail_image');
            $fileName = time() . '_detail_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $data['detail_image'] = 'images/' . $fileName;
            $data['has_detail'] = true;
        }

        // Auto-generate WhatsApp URL if empty
        if (empty($data['whatsapp_url'])) {
            $phoneNumber = '6285954572652';
            $message = 'Halo CV. Srikandi Keris Barokah, saya tertarik dengan info ' . $data['name'];
            $data['whatsapp_url'] = 'https://wa.me/' . $phoneNumber . '?text=' . rawurlencode($message);
        }

        $product->update($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        // Delete main image file
        if ($product->image && File::exists(public_path($product->image))) {
            File::delete(public_path($product->image));
        }

        // Delete detail image file
        if ($product->detail_image && File::exists(public_path($product->detail_image))) {
            File::delete(public_path($product->detail_image));
        }

        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
