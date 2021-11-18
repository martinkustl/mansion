<?php
if (!function_exists('format_datetime')) {
    function format_datetime(string $date = null)
    {
        if (!$date) return null;
        return date('d.m.Y H:i', strtotime($date));
    }
}
