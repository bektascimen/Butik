<?php

if (!function_exists('nitelik')) {
    function nitelik($id)
    {
        return \App\Models\OzellikDegerleri::find($id);
    }
}
