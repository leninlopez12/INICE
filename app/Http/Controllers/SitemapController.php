<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Agrega aquí todas las URLs de tu sitio
        $urls = [
            'https://inice.edu.pe/',
            'https://inice.edu.pe/nosotros',
            'https://inice.edu.pe/reclamaciones',
            'https://inice.edu.pe/cursos',
            'https://inice.edu.pe/certificados',
            'https://inice.edu.pe/login',
        ];

        foreach ($urls as $url) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . $url . '</loc>';
            $sitemap .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
            $sitemap .= '<changefreq>weekly</changefreq>';
            $sitemap .= '<priority>0.8</priority>';
            $sitemap .= '</url>';
        }

        $sitemap .= '</urlset>';

        return Response::make($sitemap, 200, ['Content-Type' => 'application/xml']);
    }
}
