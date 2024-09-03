@if (request()->routeIs('home'))
    <meta name="description"
        content="Admit Station a top consultancy firm in Bangladesh, We're your one-stop solution, whether you're searching for a study abroad consultancy firm near Banani or exploring options for studying abroad from Dhaka.">
    <meta property="og:description"
        content="Admit Station a top consultancy firm in Bangladesh, We're your one-stop solution, whether you're searching for a study abroad consultancy firm near Banani or exploring options for studying abroad from Dhaka." />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
@elseif(request()->routeIs('about'))
    <meta name="description"
        content="Are you looking for admission in a renowned and world’s top-ranked school or university? You've come to the right place! Our platform is your gateway to explore some of the best educational institutions globally.">
    <meta property="og:description"
        content="Are you looking for admission in a renowned and world’s top-ranked school or university? You've come to the right place! Our platform is your gateway to explore some of the best educational institutions globally." />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
@elseif(request()->routeIs('list-institute'))
    <meta name="description"
        content="Explore top-ranked schools and universities worldwide for your educational journey. Discover institutes that align with your academic goals and ambitions. Start your path to success with us today.">
    <meta property="og:description"
        content="Explore top-ranked schools and universities worldwide for your educational journey. Discover institutes that align with your academic goals and ambitions. Start your path to success with us today." />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
@elseif(request()->routeIs('become-a-agent'))
    <meta name="description"
        content="Join our network of professional agents and help students connect with top-ranked schools and universities worldwide. Become an agent today and start guiding students towards their educational dreams.">
    <meta property="og:description"
        content="Join our network of professional agents and help students connect with top-ranked schools and universities worldwide. Become an agent today and start guiding students towards their educational dreams." />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
@elseif(request()->routeIs('details-institute'))
    <meta name="description"
        content="Join our network of professional agents and help students connect with top-ranked schools and universities worldwide. Become an agent today and start guiding students towards their educational dreams.">
    <meta property="og:description"
        content="Join our network of professional agents and help students connect with top-ranked schools and universities worldwide. Become an agent today and start guiding students towards their educational dreams." />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
@endif
