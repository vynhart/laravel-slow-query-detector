<?php

return [
    'enabled' => (bool) env('SLOW_QUERY_LOG_ENABLED', false),
    'min-threshold' => (int) env('SLOW_QUERY_MIN_THRESHOLD', 50), # in millisecond
    'trace-only' => env('SLOW_QUERY_TRACE_ONLY', ''),
    'trace-exclude' => env('SLOW_QUERY_TRACE_EXCLUDE', ''),
    'storage' => env('SLOW_QUERY_LOG_STORAGE', 'file')
];