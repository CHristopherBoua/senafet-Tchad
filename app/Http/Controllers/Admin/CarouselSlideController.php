<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCarouselSlideRequest;
use App\Http\Requests\Admin\UpdateCarouselSlideRequest;
use App\Models\CarouselSlide;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CarouselSlideController extends Controller
{
    public function index(): View
    {
        $slides = CarouselSlide::query()->ordered()->get();
        return view('admin.carousel.index', ['slides' => $slides]);
    }

    public function create(): View
    {
        return view('admin.carousel.create');
    }

    public function store(StoreCarouselSlideRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('carousel', 'public');
        }

        $videoPath = null;
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('carousel/videos', 'public');
        }

        CarouselSlide::query()->create([
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'],
            'type' => $validated['type'],
            'image_path' => $path,
            'video_url' => $validated['video_url'] ?? null,
            'video_path' => $videoPath,
            'link_url' => $validated['link_url'] ?? null,
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.carousel.index')->with('success', __('admin.carousel_slide_created'));
    }

    public function edit(CarouselSlide $carousel_slide): View
    {
        return view('admin.carousel.edit', ['slide' => $carousel_slide]);
    }

    public function update(UpdateCarouselSlideRequest $request, CarouselSlide $carousel_slide): RedirectResponse
    {
        $validated = $request->validated();

        $path = $carousel_slide->image_path;
        if ($request->hasFile('image')) {
            if ($carousel_slide->image_path) {
                Storage::disk('public')->delete($carousel_slide->image_path);
            }
            $path = $request->file('image')->store('carousel', 'public');
        }

        $videoPath = $carousel_slide->video_path;
        if ($request->hasFile('video')) {
            if ($carousel_slide->video_path) {
                Storage::disk('public')->delete($carousel_slide->video_path);
            }
            $videoPath = $request->file('video')->store('carousel/videos', 'public');
        }

        $carousel_slide->update([
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'],
            'type' => $validated['type'],
            'image_path' => $path,
            'video_url' => $validated['video_url'] ?? null,
            'video_path' => $videoPath,
            'link_url' => $validated['link_url'] ?? null,
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.carousel.index')->with('success', __('admin.carousel_slide_updated'));
    }

    public function destroy(CarouselSlide $carousel_slide): RedirectResponse
    {
        if ($carousel_slide->image_path) {
            Storage::disk('public')->delete($carousel_slide->image_path);
        }
        if ($carousel_slide->video_path) {
            Storage::disk('public')->delete($carousel_slide->video_path);
        }
        $carousel_slide->delete();
        return redirect()->route('admin.carousel.index')->with('success', __('admin.carousel_slide_deleted'));
    }
}
