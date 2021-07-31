<?php

use Illuminate\Support\Facades\Auth;

function isAdmin():bool {
    return Auth::user()->is_admin;
}
