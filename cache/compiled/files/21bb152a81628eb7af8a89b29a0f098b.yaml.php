<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/GyA/user/plugins/archives/archives.yaml',
    'modified' => 1557420805,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'date_display_format' => 'F Y',
        'show_count' => true,
        'limit' => 12,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'filter_combinator' => 'and',
        'filters' => [
            'category' => 'blog'
        ],
        'taxonomy_names' => [
            'month' => 'archives_month',
            'year' => 'archives_year'
        ]
    ]
];
