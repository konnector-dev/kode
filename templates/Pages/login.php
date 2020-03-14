<?php
use Cake\Routing\Router;

?>

<a
    href="<?php echo Router::url('/oauth-github/auth-request'); ?>"
    type="button"
    class="
                          inline-flex items-center px-6 py-3 border border-kored text-base leading-6 font-medium
                          text-gray-300 bg-red-600 bg-kored
                          hover:border-gray-300"
>
    <i class="fa fa-github"></i>
    &nbsp; &nbsp; Sign in with GitHub
</a>
