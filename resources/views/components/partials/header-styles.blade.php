<style>
    .header-scrolled {
        @apply bg-opacity-100;
    }

    /* Smooth appearance of active indicator */
    .active-nav-link {
        @apply text-secondary after:w-2/3;
    }

    @keyframes gradient-x {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    @keyframes meteor {
        0% {
            transform: translateY(-100%) translateX(-100%) rotate(-45deg);
        }

        100% {
            transform: translateY(200%) translateX(200%) rotate(-45deg);
        }
    }

    .animate-gradient-x {
        animation: gradient-x 10s ease infinite;
    }

    .bg-size-200 {
        background-size: 200% 200%;
    }

    .animate-meteor {
        animation: meteor 5s linear infinite;
    }
</style>
