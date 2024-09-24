<?php

namespace App\Functions; // Usa solo "Functions"

use Illuminate\Support\Str;
use App\Models\Post;

class Helper // Nome della classe con la maiuscola
{
    public static function generateSlug($title, $separator = '-')
    {
        $slug = Str::slug($title, $separator);
        $original_slug = $slug;
        $counter = 1;

        // Limita la lunghezza dello slug a 250 caratteri
        $slug = substr($slug, 0, 250);

        while (Post::where('slug', $slug)->exists()) {
            $slug = $original_slug . $separator . $counter;
            // Limita la lunghezza dello slug a 250 caratteri
            $slug = substr($slug, 0, 250);
            $counter++;
        }

        return $slug;
    }
}
