<?php namespace Cribbb\Composers;

use Auth;

class SideComposer {

  public function compose($view)
  {
    $user = Auth::user();

    $view->with('user', $user);
    $view->with('cribbbs', $user->cribbbs);
  }

}
