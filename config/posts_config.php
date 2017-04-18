<?php

return [
    'path' => 'blog/{date|Y/m}/{filename}',
    'sort' => '-date',
    
    'get_related' => function($item, $posts) {
        return $posts
            ->except($item->getFilename())
            ->filter(function($post) use ($item) {
                return collect($post->tags)->intersect($item->tags)->isNotEmpty();
            })
            ->sort(function($a, $b) use ($item) {
                $tagCountA = collect($a->tags)->intersect($item->tags)->count();
                $tagCountB = collect($b->tags)->intersect($item->tags)->count();
                
                // Sort descending
                return ($tagCountA < $tagCountB) ? 1 : -1;
            })
            ->take(3);
    },

    'date_formated' => function($item) {
        return date('Y-m-d', $item->date);
    },

    'date_formated_xml' => function($item) {
        return date('c', $item->date);
    },

    'content_xml' => function($item) {
        return htmlspecialchars($item->getContent(), ENT_XML1 | ENT_COMPAT, 'UTF-8');
    },

];