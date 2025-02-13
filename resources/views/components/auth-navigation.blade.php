<p class="text-sm font-light text-gray-500 ">
    {{ $route === 'signup' ? 'Don’t have an account yet' : 'Already have an account !' }} <a href={{route($route)}}
        class="font-medium text-primary-600 text-blue-500 hover:underline">
        {{ $route === 'login' ? 'Login' : 'Signup' }}
    </a>
