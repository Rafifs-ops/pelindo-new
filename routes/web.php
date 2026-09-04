<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

// Landing Page
Route::get('/', function () {
    $terminals = \App\Models\Terminal::all();
    $news = \App\Models\Article::where('type', 'press_release')->latest()->take(3)->get();
    return view('pages.landing', compact('terminals', 'news'));
})->name('home');

// Profile
Route::prefix('profile')->group(function () {
    Route::get('/tentang-kami', fn() => view('pages.profile.tentang_kami'))->name('profile.about');
    Route::get('/manajemen', function () {
        $directors = \App\Models\Director::all();
        return view('pages.profile.manajemen', compact('directors'));
    })->name('profile.manajemen');
    Route::get('/struktur-manajemen', fn() => view('pages.profile.struktur_manajemen'))->name('profile.struktur');
    Route::get('/entitas-bisnis', fn() => view('pages.profile.entitas_bisnis'))->name('profile.entitas');
});

// Investor
Route::prefix('investor')->group(function () {
    Route::get('/anggaran-dasar', function () {
        $meetings = \App\Models\MeetingSchedule::all();
        return view('pages.investor.anggaran_dasar', compact('meetings'));
    })->name('investor.anggaran_dasar');
    
    Route::get('/laporan', function () {
        $reports = \App\Models\Report::all();
        return view('pages.investor.laporan', compact('reports'));
    })->name('investor.laporan');
    
    Route::get('/ppid', fn() => view('pages.investor.ppid'))->name('investor.ppid');
});

// Tata Kelola
Route::prefix('tata-kelola')->group(function () {
    Route::get('/pedoman', function () {
        $documents = \App\Models\Document::where('type', 'pedoman')->get();
        return view('pages.tata_kelola.pedoman', compact('documents'));
    })->name('tk.pedoman');
    
    Route::get('/kode-etik-bisnis', fn() => view('pages.tata_kelola.kode_etik'))->name('tk.kode_etik');
    Route::get('/wbs', fn() => view('pages.tata_kelola.wbs'))->name('tk.wbs');
    Route::get('/kebijakan-smt', fn() => view('pages.tata_kelola.kebijakan_smt'))->name('tk.kebijakan_smt');
    
    Route::get('/rups', function () {
        $documents = \App\Models\Document::where('type', 'rups')->orderBy('year', 'desc')->get();
        return view('pages.tata_kelola.rups', compact('documents'));
    })->name('tk.rups');
});

// Layanan
Route::prefix('layanan')->group(function () {
    Route::get('/', fn() => view('pages.layanan.index'))->name('layanan.index');
    Route::get('/branch', function () {
        $branches = \App\Models\Branch::all();
        return view('pages.layanan.branches', compact('branches'));
    })->name('layanan.branch');
    Route::get('/branch/{id}', function ($id) {
        $branch = \App\Models\Branch::findOrFail($id);
        return view('pages.layanan.branch_detail', compact('branch'));
    })->name('layanan.branch.detail');
});

// TJSL
Route::prefix('tjsl')->group(function () {
    Route::get('/', fn() => view('pages.pjsl.index'))->name('tjsl.index');
});
Route::get('/pjsl', fn() => redirect()->route('tjsl.index'))->name('pjsl.index');

// Media
Route::prefix('media')->group(function () {
    Route::get('/siaran-pers', function () {
        $articles = \App\Models\Article::where('type', 'press_release')->get();
        return view('pages.media.siaran_pers', compact('articles'));
    })->name('media.siaran_pers');
    
    Route::get('/pemberitaan', function () {
        $articles = \App\Models\Article::where('type', 'media_news')->get();
        return view('pages.media.pemberitaan', compact('articles'));
    })->name('media.pemberitaan');
    
    Route::get('/detail/{id}', function ($id) {
        $article = \App\Models\Article::findOrFail($id);
        return view('pages.media.detail', compact('article'));
    })->name('media.detail');
    
    Route::get('/search', function (Request $request) {
        $q = $request->input('q');
        $articles = collect();
        if ($q) {
            $articles = \App\Models\Article::where('title', 'like', "%{$q}%")
                            ->orWhere('content', 'like', "%{$q}%")
                            ->get();
        }
        return view('pages.media.search_results', compact('articles', 'q'));
    })->name('media.search');
});
