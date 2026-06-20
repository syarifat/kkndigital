<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    /**
     * Display the dummy template preview based on package name.
     */
    public function show(Request $request, $template)
    {
        $template = strtolower($template);

        if (!in_array($template, ['basic', 'standard', 'pro', 'premium'])) {
            abort(404);
        }

        // Subpages for Gold / Platinum multi-page mockups
        $page = $request->query('page', 'home');

        // Render appropriate view
        return view("demo.{$template}", compact('page'));
    }
}
