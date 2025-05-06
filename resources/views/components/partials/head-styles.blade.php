<style>
    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
        scroll-padding-top: 80px; /* Account for fixed header */
    }
    /* Blob shape */
    .blob {
        border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
        animation: morph 8s ease-in-out infinite;
    }
    @keyframes morph {
        0% { border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%; }
        25% { border-radius: 55% 45% 30% 70% / 55% 30% 70% 45%; }
        50% { border-radius: 30% 70% 55% 45% / 30% 65% 35% 70%; }
        75% { border-radius: 65% 35% 35% 65% / 40% 60% 40% 60%; }
        100% { border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%; }
    }
    .circular-image {
        clip-path: circle(50% at 50% 50%);
    }
    
    /* Enhance section transitions */
    section {
        position: relative;
        z-index: 1;
        overflow: hidden;
    }
    
    /* Loading animation */
    .loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #F9F9F9;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: opacity 0.5s, visibility 0.5s;
    }
    
    .loader-hidden {
        opacity: 0;
        visibility: hidden;
    }
    
    .loader-logo {
        animation: pulse 1.5s infinite;
    }
    
    @keyframes pulse {
        0% { transform: scale(0.9); opacity: 0.5; }
        50% { transform: scale(1); opacity: 1; }
        100% { transform: scale(0.9); opacity: 0.5; }
    }
</style>
