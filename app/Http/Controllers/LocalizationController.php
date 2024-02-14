<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LocalizationController extends Controller
{
    /**
     * Change the application language.
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setLocale($locale)
    {
        // Vérifie si la langue est supportée
        if (!in_array($locale, ['en', 'fr'])) {
            abort(404);
        }

        // Définit la langue de l'application
        App::setLocale($locale);

        // Stocke la langue dans la session de l'utilisateur
        session(['locale' => $locale]);

        // Redirige l'utilisateur vers la page précédente ou la page d'accueil
        return Redirect::back();
    }
}
