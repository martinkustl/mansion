<?php
if (!function_exists('format_datetime')) {
    function format_datetime(string $date)
    {
        return date('d.m.Y H:i', strtotime($date));
    }
}
