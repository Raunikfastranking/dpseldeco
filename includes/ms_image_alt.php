<?php

if (!function_exists('ms_image_alt')) {
    /**
     * Alt text from MySchool / gallery API: dedicated alt fields, then title / heading, then $fallback.
     */
    function ms_image_alt($row, $fallback = '')
    {
        if (!is_array($row)) {
            return htmlspecialchars((string) $fallback, ENT_QUOTES, 'UTF-8');
        }
        $alt = '';
        foreach (['media_alt_text', 'image_alt', 'image_alt_text', 'alt_text', 'alt', 'media_alt', 'caption'] as $key) {
            if (isset($row[$key]) && $row[$key] !== '' && $row[$key] !== null) {
                $alt = is_string($row[$key]) ? $row[$key] : (string) $row[$key];
                break;
            }
        }
        if ($alt === '') {
            foreach (['title', 'heading', 'content_heading'] as $k) {
                if (!empty($row[$k]) && is_string($row[$k])) {
                    $alt = strip_tags($row[$k]);
                    break;
                }
            }
        }
        if ($alt === '' && !empty($row['content']) && is_string($row['content'])) {
            $alt = strip_tags($row['content']);
        }
        if ($alt === '') {
            $alt = (string) $fallback;
        }
        return htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('ms_gallery_preview_alt')) {
    /**
     * Alt for list cards: CMS alt is usually on the first media row, not the gallery parent.
     */
    function ms_gallery_preview_alt(array $gallery, $fallback = 'Gallery')
    {
        $first = $gallery['media'][0] ?? null;
        if (is_array($first)) {
            $merged = array_merge(
                [
                    'heading' => $gallery['heading'] ?? '',
                    'title' => $gallery['title'] ?? '',
                    'content' => $gallery['content'] ?? '',
                ],
                $first
            );
            return ms_image_alt($merged, $fallback);
        }
        return ms_image_alt($gallery, $fallback);
    }
}
