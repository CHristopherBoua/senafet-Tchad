<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateHomeVideoSectionRequest;
use App\Models\HomeVideoSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HomeVideoSectionController extends Controller
{
    public function edit(): View
    {
        $section = HomeVideoSection::query()->firstOrCreate([], ['is_active' => true]);

        return view('admin.home-video-section.edit', [
            'section' => $section,
            'metaTitle' => __('admin.video_section'),
        ]);
    }

    public function update(UpdateHomeVideoSectionRequest $request): RedirectResponse
    {
        $section = HomeVideoSection::query()->firstOrCreate([], ['is_active' => true]);

        $videoPath = $section->video_path;
        if ($request->hasFile('video')) {
            if ($section->video_path) {
                Storage::disk('public')->delete($section->video_path);
            }
            $videoPath = $request->file('video')->store('home-video', 'public');
        }

        $posterPath = $section->poster_path;
        if ($request->hasFile('poster')) {
            if ($section->poster_path) {
                Storage::disk('public')->delete($section->poster_path);
            }
            $posterPath = $request->file('poster')->store('home-video', 'public');
        }

        $section->update([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'cta_text' => $request->input('cta_text'),
            'cta_url' => $request->input('cta_url'),
            'video_path' => $videoPath,
            'poster_path' => $posterPath,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.home-video-section.edit')->with('success', __('admin.video_section_updated'));
    }
}
