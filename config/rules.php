<?php

$colors = ['red', 'blue', 'green', 'purple', 'orange', 'yellow', 'aqua', 'pink'];

return [
    'color' => ['required', \Illuminate\Validation\Rule::in($colors)],
    'footer_description' => 'required|string',
    'footer_links' => 'nullable|array',
    'footer_social_twitter' => 'nullable|string',
    'footer_social_discord' => 'nullable|string',
    'footer_social_youtube' => 'nullable|string',
    'footer_social_teamspeak' => 'nullable|string',
    'footer_social_instagram' => 'nullable|string',
];
