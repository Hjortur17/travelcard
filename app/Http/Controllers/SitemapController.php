<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
	public function index()
	{
		return view(asset('sitemap.xml');
	}
}
