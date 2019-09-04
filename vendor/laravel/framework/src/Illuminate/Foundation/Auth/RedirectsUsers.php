<?php

namespace Illuminate\Foundation\Auth;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath($user)
    {
         if (method_exists($this, 'redirectTo')) {
             return $this->redirectTo($user);
         }

         return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
}
