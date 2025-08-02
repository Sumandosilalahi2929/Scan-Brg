<?php

namespace App\Services;

use thiagoalessio\TesseractOCR\TesseractOCR;

class OCRService
{
    public function extractTextFromImage(string $path): string
    {
        return (new TesseractOCR($path))
            ->executable(env('TESSERACT_PATH')) // <- ini penting
            ->lang('ind+eng') // opsional: gunakan 'eng' kalau 'ind' tidak tersedia
            ->run();
    }
}
