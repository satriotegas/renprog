<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navLinks = document.querySelectorAll('.nav-link');
        const currentPage = window.location.pathname.split('/').pop(); // Get the current page

        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (
                (currentPage === href ) 
            ) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    });
</script>
