<?php

namespace App\Traits;

trait RedirectAfterSubmit
{
    public function handleRedirectAfterSubmit()
    {
        $redirects = session('kuesioner_redirects', []);

        while (!empty($redirects)) {
            $next = array_shift($redirects);

            if (\Route::has($next)) {
                session(['kuesioner_redirects' => $redirects]); // simpan sisa kuesioner
                return redirect()->route($next)->with('success', 'Silakan lanjut ke kuesioner berikutnya.');
            }
        }

        // Tidak ada lagi kuesioner
        session()->forget('kuesioner_redirects');
        return redirect()->route('dashboard')->with('success', 'Terima kasih telah mengisi semua kuesioner.');
    }
}
