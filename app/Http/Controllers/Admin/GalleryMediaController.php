<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryMedia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class GalleryMediaController extends Controller
{
    public function index(): View
    {
        $media = GalleryMedia::query()->ordered()->get();

        return view('admin.gallery.index', ['media' => $media, 'metaTitle' => __('admin.gallery')]);
    }

    public function create(): View
    {
        return view('admin.gallery.create', ['metaTitle' => __('admin.gallery_add')]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image|max:'.config('app.max_upload_kb', 524288),
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        GalleryMedia::query()->create([
            'title' => $validated['title'],
            'image_path' => $path,
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.gallery.index')->with('success', __('admin.gallery_media_created'));
    }

    public function edit(GalleryMedia $gallery_medium): View
    {
        return view('admin.gallery.edit', ['media' => $gallery_medium, 'metaTitle' => __('admin.gallery')]);
    }

    public function update(Request $request, GalleryMedia $gallery_medium): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:'.config('app.max_upload_kb', 524288),
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $path = $gallery_medium->image_path;
        if ($request->hasFile('image')) {
            if ($gallery_medium->image_path) {
                Storage::disk('public')->delete($gallery_medium->image_path);
            }
            $path = $request->file('image')->store('gallery', 'public');
        }

        $gallery_medium->update([
            'title' => $validated['title'],
            'image_path' => $path,
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.gallery.index')->with('success', __('admin.gallery_media_updated'));
    }

    public function destroy(GalleryMedia $gallery_medium): RedirectResponse
    {
        if ($gallery_medium->image_path) {
            Storage::disk('public')->delete($gallery_medium->image_path);
        }
        $gallery_medium->delete();

        return redirect()->route('admin.gallery.index')->with('success', __('admin.gallery_media_deleted'));
    }
}
