<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Services\NewsService;
// use Illuminate\Http\UploadFile;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news;

    public function __construct(NewsService $news)
    {
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page = $request->query('page');

        if ($page) {
            $page = (int) $page;
        } else {
            $page = 1;
        }
        $news = $this->news->index($page);
        $count = $this->news->count();

        return view('Front.news.index', [
            'news' => $news,
            'count' => $count / 10,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Back.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'document' => 'nullable|mimes:pdf|max:10240', // 10MB

            'title_es' => 'required|string|max:255',
            'title_pt' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',

            'short_description_es' => 'required|string|max:1000',
            'short_description_pt' => 'required|string|max:1000',
            'short_description_en' => 'required|string|max:1000',

            'description_es' => 'required|string',
            'description_pt' => 'required|string',
            'description_en' => 'required|string',
        ]);

        // (Opcional) Sanitiza HTML de Quill para evitar XSS
        // $validated['description_es'] = Purifier::clean($validated['description_es']);
        // $validated['description_pt'] = Purifier::clean($validated['description_pt']);
        // $validated['description_en'] = Purifier::clean($validated['description_en']);

        // Guardar thumbnail con nombre único (no pisas archivos)
        $thumbPath = $request->file('thumbnail')->store('images', 'public');
        $thumbUrl = Storage::url($thumbPath); // /storage/images/xxxx.jpg

        // Guardar PDF (si viene)
        $docUrl = null;
        if ($request->hasFile('document')) {
            $docPath = $request->file('document')->store('documents', 'public');
            $docUrl = Storage::url($docPath); // /storage/documents/xxxx.pdf
        }

        $news = News::create([
            'tags' => [], // asegúrate de que en el modelo sea cast a array/json
            'title_es' => $validated['title_es'],
            'short_description_es' => $validated['short_description_es'],
            'description_es' => $validated['description_es'],

            'title_pt' => $validated['title_pt'],
            'short_description_pt' => $validated['short_description_pt'],
            'description_pt' => $validated['description_pt'],

            'title_en' => $validated['title_en'],
            'short_description_en' => $validated['short_description_en'],
            'description_en' => $validated['description_en'],

            'image' => $thumbUrl,
            'document' => $docUrl,
        ]);

        return back()->with('success', 'La noticia está creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
        return view('Front.news.show', ['post' => $this->news->show($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
